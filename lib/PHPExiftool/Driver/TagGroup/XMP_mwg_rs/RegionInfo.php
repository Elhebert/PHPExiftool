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
class RegionInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-mwg-rs:RegionInfo';

    protected string $name = 'RegionInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Region Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MWG::Regions
             * line : 113778
             * type : struct
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MWG::Regions.XMP-mwg-rs:RegionInfo',
            'desc' => [
                'en' => 'Region Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
