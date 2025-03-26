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
class IRWindowTransmission extends AbstractTagGroup
{
    protected string $id = 'FLIR:IRWindowTransmission';

    protected string $name = 'IRWindowTransmission';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'IR Window Transmission',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::CameraInfo
             * line : 85590
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::CameraInfo.FLIR:IRWindowTransmission',
            'desc' => [
                'en' => 'IR Window Transmission',
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::FPF
             * line : 85868
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:IRWindowTransmission',
            'desc' => [
                'en' => 'IR Window Transmission',
            ],
        ],
        2 => [
            /**
             * table_name : FLIR::Params
             * line : 86396
             * type : float
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Params.FLIR:IRWindowTransmission',
            'desc' => [
                'en' => 'IR Window Transmission',
            ],
        ],
    ];

    protected int $count = 0;
}
