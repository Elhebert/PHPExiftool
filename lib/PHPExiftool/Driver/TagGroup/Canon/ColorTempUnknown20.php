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
class ColorTempUnknown20 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown20';

    protected string $name = 'ColorTempUnknown20';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 20',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46398
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown20',
            'desc' => [
                'en' => 'Color Temp Unknown 20',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46662
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown20',
            'desc' => [
                'en' => 'Color Temp Unknown 20',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47476
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown20',
            'desc' => [
                'en' => 'Color Temp Unknown 20',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47710
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown20',
            'desc' => [
                'en' => 'Color Temp Unknown 20',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47998
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown20',
            'desc' => [
                'en' => 'Color Temp Unknown 20',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
