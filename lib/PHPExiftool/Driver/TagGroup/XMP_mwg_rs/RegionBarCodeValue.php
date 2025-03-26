<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_mwg_rs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RegionBarCodeValue extends AbstractTagGroup
{
    protected string $id = 'XMP-mwg-rs:RegionBarCodeValue';

    protected string $name = 'RegionBarCodeValue';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Region Bar Code Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MWG::Regions
             * line : 113817
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'MWG::Regions.XMP-mwg-rs:RegionBarCodeValue',
            'desc' => [
                'en' => 'Region Bar Code Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
