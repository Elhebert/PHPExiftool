<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsUnknown29 extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsUnknown29';

    protected string $name = 'WB_RGGBLevelsUnknown29';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Unknown 29',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46449
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown29',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 29',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47761
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown29',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 29',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData9
             * line : 48049
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown29',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 29',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
