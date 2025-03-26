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
class RegionAreaW extends AbstractTagGroup
{
    protected string $id = 'XMP-mwg-rs:RegionAreaW';

    protected string $name = 'RegionAreaW';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Region Area W',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MWG::Regions
             * line : 113808
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'MWG::Regions.XMP-mwg-rs:RegionAreaW',
            'desc' => [
                'en' => 'Region Area W',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
