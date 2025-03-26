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
class Emissivity extends AbstractTagGroup
{
    protected string $id = 'FLIR:Emissivity';

    protected string $name = 'Emissivity';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Emissivity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::CameraInfo
             * line : 85575
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::CameraInfo.FLIR:Emissivity',
            'desc' => [
                'en' => 'Emissivity',
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::FPF
             * line : 85841
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:Emissivity',
            'desc' => [
                'en' => 'Emissivity',
            ],
        ],
        2 => [
            /**
             * table_name : FLIR::Main
             * line : 86041
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Main.FLIR:Emissivity',
            'desc' => [
                'en' => 'Emissivity',
            ],
        ],
        3 => [
            /**
             * table_name : FLIR::Params
             * line : 86381
             * type : float
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Params.FLIR:Emissivity',
            'desc' => [
                'en' => 'Emissivity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
