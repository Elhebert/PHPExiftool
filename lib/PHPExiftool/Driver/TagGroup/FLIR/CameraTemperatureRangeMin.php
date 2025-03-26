<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraTemperatureRangeMin extends AbstractTagGroup
{
    protected string $id = 'FLIR:CameraTemperatureRangeMin';

    protected string $name = 'CameraTemperatureRangeMin';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Temperature Range Min',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::CameraInfo
             * line : 85623
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::CameraInfo.FLIR:CameraTemperatureRangeMin',
            'desc' => [
                'en' => 'Camera Temperature Range Min',
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::FPF
             * line : 85817
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:CameraTemperatureRangeMin',
            'desc' => [
                'en' => 'Camera Temperature Range Min',
            ],
        ],
        2 => [
            /**
             * table_name : FLIR::Main
             * line : 86050
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'FLIR::Main.FLIR:CameraTemperatureRangeMin',
            'desc' => [
                'en' => 'Camera Temperature Range Min',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
