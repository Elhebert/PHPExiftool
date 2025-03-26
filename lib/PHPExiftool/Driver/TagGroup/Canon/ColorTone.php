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
class ColorTone extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTone';

    protected string $name = 'ColorTone';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Tone',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9712
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:ColorTone',
            'desc' => [
                'en' => 'Color Tone',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 13099
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:ColorTone',
            'desc' => [
                'en' => 'Color Tone',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraSettings
             * line : 45701
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraSettings.Canon:ColorTone',
            'desc' => [
                'en' => 'Color Tone',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorInfo
             * line : 48086
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorInfo.Canon:ColorTone',
            'desc' => [
                'en' => 'Color Tone',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::LogInfo
             * line : 48843
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Canon::LogInfo.Canon:ColorTone',
            'desc' => [
                'en' => 'Color Tone',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
