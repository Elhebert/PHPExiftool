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
class HighISONoiseReduction extends AbstractTagGroup
{
    protected string $id = 'Canon:HighISONoiseReduction';

    protected string $name = 'HighISONoiseReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'High ISO Noise Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18247
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 20001
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26951
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40235
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::LightingOpt
             * line : 48791
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::LightingOpt.Canon:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
