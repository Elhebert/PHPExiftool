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
class NormalWhiteLevel extends AbstractTagGroup
{
    protected string $id = 'Canon:NormalWhiteLevel';

    protected string $name = 'NormalWhiteLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Normal White Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46458
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46710
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47044
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47056
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47068
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData5
             * line : 47098
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData5.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47275
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47488
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47503
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47779
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47791
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData9
             * line : 48058
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:NormalWhiteLevel',
            'desc' => [
                'en' => 'Normal White Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
