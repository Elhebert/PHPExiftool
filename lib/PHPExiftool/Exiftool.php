<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use Exception;
use PHPExiftool\Exception\RuntimeException;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Process\Process;

class Exiftool implements LoggerAwareInterface
{
    protected LoggerInterface $logger;

    protected ?string $binaryPath = null;

    public function __construct(LoggerInterface $logger, ?string $binaryPath = null)
    {
        $this->logger = $logger;

        $this->binaryPath = $this->getExecutableBinary($binaryPath);    // ensure executable (find default if $binaryPath === null)
    }

    /**
     * {@inheritdoc}
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * Execute a command and return the output
     *
     * @param  array<string>  $command  arguments without executable
     *
     * @throws Exception
     */
    public function executeCommand(array $command, int $timeout = 60): string
    {
        array_unshift($command, $this->binaryPath);
        $process = new Process($command);
        $process->setTimeout($timeout);

        $this->logger->info(sprintf('Exiftool executes command %s', $process->getCommandLine()));

        $exitcode = $process->run();

        $this->logger->info(sprintf('Exiftool process returned exitcode = %s', $exitcode));

        if (! $process->isSuccessful()) {
            throw new RuntimeException(sprintf("Command \"%s\"\n%s\nfailed : \"%s\", exitcode %s", implode(' ', $command), var_export($command, true), $process->getErrorOutput(), $process->getExitCode()));
        }

        $output = $process->getOutput();

        $this->logger->debug(sprintf("Exiftool output :\n%s", $output));

        unset($process);

        return $output;
    }

    private function getExecutableBinary(?string $binaryPath = null): string
    {
        if (! $binaryPath) {
            $binaryPath = self::searchBinary($this->logger);
        }

        if (is_executable($binaryPath)) {
            $this->logger->debug(sprintf('Exiftool binary : "%s" is executable', $binaryPath));

            return $binaryPath;
        } else {
            throw new RuntimeException(sprintf('Exiftool binary : "%s" is not executable', $binaryPath));
        }
    }

    protected static function searchBinary(?LoggerInterface $logger = null): string
    {
        static $binary = null;

        if ($binary) {
            return $binary;
        }

        $testLocations = [
            $dev = __DIR__.'/../../vendor/exiftool/exiftool/exiftool',
            $packaged = __DIR__.'/../../../../exiftool/exiftool/exiftool',
        ];

        foreach ($testLocations as $i => $location) {
            if (defined('PHP_WINDOWS_VERSION_BUILD')) {
                $location .= '.exe';
            }

            $logger?->debug(sprintf('Searching exiftool binary as "%s" ...', $location));

            $rp = realpath($location);
            if ($rp) {
                $logger?->debug(sprintf('  -> checking realpath "%s"', $rp));

                if (is_executable($rp)) {
                    $logger?->debug(sprintf('  ->  -> "%s" is executable', $rp));

                    return $binary = $rp;
                } else {
                    $logger?->debug(sprintf('  ->  -> "%s" is not executable %s', $rp, $i < count($testLocations) ? ', check next' : ''));
                }
            } else {
                $logger?->debug(sprintf('  -> realpath("%s") = %s', $location, var_export($rp, true)));
            }
        }

        throw new RuntimeException('Unable to find exiftool binary');
    }
}
