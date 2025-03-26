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
class ColorTempUnknown9 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown9';

    protected string $name = 'ColorTempUnknown9';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 9',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45973
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown9',
            'desc' => [
                'en' => 'Color Temp Unknown 9',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46115
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown9',
            'desc' => [
                'en' => 'Color Temp Unknown 9',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46290
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown9',
            'desc' => [
                'en' => 'Color Temp Unknown 9',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46548
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown9',
            'desc' => [
                'en' => 'Color Temp Unknown 9',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46828
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown9',
            'desc' => [
                'en' => 'Color Temp Unknown 9',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47227
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown9',
            'desc' => [
                'en' => 'Color Temp Unknown 9',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47368
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown9',
            'desc' => [
                'en' => 'Color Temp Unknown 9',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47602
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown9',
            'desc' => [
                'en' => 'Color Temp Unknown 9',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47890
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown9',
            'desc' => [
                'en' => 'Color Temp Unknown 9',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
