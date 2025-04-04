<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Tool\Command;

use Exception;
use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPExiftool\InformationDumper;
use PHPExiftool\PHPExiftool;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class ClassesBuilderCommand extends Command
{
    protected InputInterface $input;

    protected OutputInterface $output;

    protected function configure(): self
    {
        $this
            ->setName('classes-builder')
            ->setDescription('Build TagGroup classes from exiftool documentation.')
            ->addOption('with-mwg', '', null, 'Include MWG tags')
            ->addOption('path', null, InputOption::VALUE_OPTIONAL, 'Destination root where classes will be generated', './Driver')
            ->addOption('lng', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY, 'Wanted lng(s) for tag(group) descriptions', [])
            ->setHelp('Classes will be generated in subdirectory "'.PHPExiftool::SUBDIR.'" relative to path option, eg. ./Driver/'.PHPExiftool::SUBDIR.' for default path.');

        return $this;
    }

    /**
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = microtime(true);

        $this->input = $input;
        $this->output = $output;

        $this->output->writeln('Dumping Exiftool Dictionnary... ');

        $logger = new Logger('Builder');
        if ($output->isDebug()) {
            $logger->pushHandler(new StreamHandler('php://stdout'));
        } else {
            $logger->pushHandler(new NullHandler);
        }

        $options = [];
        if ($input->getOption('with-mwg')) {
            $options[] = InformationDumper::LISTOPTION_MWG;
        }

        $path = realpath($input->getOption('path'));
        if ($path === false) {
            throw new Exception(sprintf('Path "%s" does not exists.', $input->getOption('path')));
        }
        $subPath = $path.'/'.PHPExiftool::SUBDIR;      // security : do NOT rm passed cli option
        @mkdir($subPath, 0755, true);
        $logger->info(sprintf('Erasing previous files "%s/*" ', $subPath));
        try {
            $cmd = 'rm -Rf '.$subPath.'/* 2> /dev/null';
            $output = [];
            @exec($cmd, $output);
        } catch (\Exception $e) {
            // no-op
        }
        $logger->info('Generating classes... ');

        $PHPExiftool = new PHPExiftool($logger);
        $nClasses = $PHPExiftool->generateClasses($options, $input->getOption('lng'));

        $this->output->writeln(
            sprintf(
                'Generated %d classes in %d seconds (%d Mb)',
                $nClasses,
                (microtime(true) - $start),
                memory_get_peak_usage() >> 20
            )
        );

        return 0;
    }
}
