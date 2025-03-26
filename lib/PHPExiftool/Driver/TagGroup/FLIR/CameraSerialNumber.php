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
class CameraSerialNumber extends AbstractTagGroup
{
    protected string $id = 'FLIR:CameraSerialNumber';

    protected string $name = 'CameraSerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Camera Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::CameraInfo
             * line : 85650
             * type : string
             * writable : false
             * count : 16
             * flags :
             */
            'id' => 'FLIR::CameraInfo.FLIR:CameraSerialNumber',
            'desc' => [
                'en' => 'Camera Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::FPF
             * line : 85814
             * type : string
             * writable : false
             * count : 32
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:CameraSerialNumber',
            'desc' => [
                'en' => 'Camera Serial Number',
            ],
        ],
        2 => [
            /**
             * table_name : FLIR::SerialNums
             * line : 86511
             * type : string
             * writable : false
             * count : 9
             * flags : permanent
             */
            'id' => 'FLIR::SerialNums.FLIR:CameraSerialNumber',
            'desc' => [
                'en' => 'Camera Serial Number',
            ],
        ],
    ];
}
