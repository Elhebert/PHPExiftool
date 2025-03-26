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

use ArrayIterator;
use DOMDocument;
use Exception;
use IteratorAggregate;
use PHPExiftool\Driver\Metadata\Metadata;
use PHPExiftool\Driver\Metadata\MetadataBag;
use PHPExiftool\Driver\Value\ValueInterface;
use PHPExiftool\Exception\ParseErrorException;
use PHPExiftool\Exception\TagUnknown;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Traversable;

/**
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 *
 * @template-implements IteratorAggregate<string, Metadata>
 */
class FileEntity implements IteratorAggregate
{
    private CacheItemPoolInterface $cache;

    public function __construct(
        private string $file,
        DOMDocument $dom,
        private RDFParser $parser,
    ) {
        $this->cache = new ArrayAdapter;
        $this->parser = $parser->open($dom->saveXML());
    }

    /**
     * @return ArrayIterator<string, Metadata>
     *
     * @throws InvalidArgumentException
     * @throws Exception
     */
    public function getIterator(): Traversable
    {
        return $this->getMetadatas()->getIterator();
    }

    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @throws ParseErrorException
     * @throws TagUnknown
     * @throws InvalidArgumentException
     */
    public function getMetadatas(): MetadataBag
    {
        $key = $this->getCacheKey();
        $ci = $this->cache->getItem($key);
        if ($ci->isHit()) {
            return $ci->get();
        }

        $metadatas = $this->parser->ParseMetadatas();
        $ci->set($metadatas);

        return $metadatas;
    }

    public function getCacheKey(): string
    {
        return urlencode($this->file);    // will encode psr6 reserved chars
    }

    /**
     * Execute a user defined query to retrieve metadata
     *
     * @throws ParseErrorException
     * @throws TagUnknown
     */
    public function executeQuery(string $query): ValueInterface
    {
        return $this->parser->Query($query);
    }
}
