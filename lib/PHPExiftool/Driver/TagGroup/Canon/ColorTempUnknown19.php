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
class ColorTempUnknown19 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown19';

    protected string $name = 'ColorTempUnknown19';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 19',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46392
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown19',
            'desc' => [
                'en' => 'Color Temp Unknown 19',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46656
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown19',
            'desc' => [
                'en' => 'Color Temp Unknown 19',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47470
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown19',
            'desc' => [
                'en' => 'Color Temp Unknown 19',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47704
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown19',
            'desc' => [
                'en' => 'Color Temp Unknown 19',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47992
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown19',
            'desc' => [
                'en' => 'Color Temp Unknown 19',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
