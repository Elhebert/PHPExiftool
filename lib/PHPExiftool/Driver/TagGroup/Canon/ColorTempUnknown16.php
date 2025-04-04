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
class ColorTempUnknown16 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown16';

    protected string $name = 'ColorTempUnknown16';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 16',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46374
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown16',
            'desc' => [
                'en' => 'Color Temp Unknown 16',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46596
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown16',
            'desc' => [
                'en' => 'Color Temp Unknown 16',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46888
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown16',
            'desc' => [
                'en' => 'Color Temp Unknown 16',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47452
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown16',
            'desc' => [
                'en' => 'Color Temp Unknown 16',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47686
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown16',
            'desc' => [
                'en' => 'Color Temp Unknown 16',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47974
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown16',
            'desc' => [
                'en' => 'Color Temp Unknown 16',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
