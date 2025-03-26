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
class HighlightTonePriority extends AbstractTagGroup
{
    protected string $id = 'Canon:HighlightTonePriority';

    protected string $name = 'HighlightTonePriority';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Highlight Tone Priority',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13126
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:HighlightTonePriority',
            'desc' => [
                'en' => 'Highlight Tone Priority',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18039
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:HighlightTonePriority',
            'desc' => [
                'en' => 'Highlight Tone Priority',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19793
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:HighlightTonePriority',
            'desc' => [
                'en' => 'Highlight Tone Priority',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21544
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:HighlightTonePriority',
            'desc' => [
                'en' => 'Highlight Tone Priority',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26740
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:HighlightTonePriority',
            'desc' => [
                'en' => 'Highlight Tone Priority',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30192
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:HighlightTonePriority',
            'desc' => [
                'en' => 'Highlight Tone Priority',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40066
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:HighlightTonePriority',
            'desc' => [
                'en' => 'Highlight Tone Priority',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::LightingOpt
             * line : 48766
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::LightingOpt.Canon:HighlightTonePriority',
            'desc' => [
                'en' => 'Highlight Tone Priority',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
