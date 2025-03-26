<?php

namespace PHPExiftool;

use PHPExiftool\Driver\HelperInterface;
use PHPExiftool\Driver\TagGroupFactory;
use PHPExiftool\Driver\TagGroupInterface;
use PHPExiftool\Exception\TagUnknown;

class Factory
{
    private PHPExiftool $phpExiftool;

    public function __construct(PHPExiftool $phpExiftool)
    {
        $this->phpExiftool = $phpExiftool;
    }

    public function createReader(): Reader
    {
        return Reader::create($this->phpExiftool->getLogger());
    }

    public function createWriter(): Writer
    {
        return Writer::create($this->phpExiftool->getLogger());
    }

    /**
     * @throws TagUnknown
     */
    public function createTagGroup(string $tagName): TagGroupInterface
    {
        return TagGroupFactory::getFromRDFTagname(
            $tagName,
            $this->phpExiftool->getLogger()
        );
    }

    /**
     * @throws TagUnknown
     */
    public function getHelper(): HelperInterface
    {
        return TagGroupFactory::loadClass(
            'TagGroup\\Helper',
            $this->phpExiftool->getLogger()
        );
    }
}
