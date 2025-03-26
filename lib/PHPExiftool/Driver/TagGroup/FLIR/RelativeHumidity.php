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
class RelativeHumidity extends AbstractTagGroup
{
    protected string $id = 'FLIR:RelativeHumidity';

    protected string $name = 'RelativeHumidity';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Relative Humidity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::CameraInfo
             * line : 85593
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::CameraInfo.FLIR:RelativeHumidity',
            'desc' => [
                'en' => 'Relative Humidity',
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::FPF
             * line : 85853
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:RelativeHumidity',
            'desc' => [
                'en' => 'Relative Humidity',
            ],
        ],
        2 => [
            /**
             * table_name : FLIR::Params
             * line : 86387
             * type : float
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Params.FLIR:RelativeHumidity',
            'desc' => [
                'en' => 'Relative Humidity',
            ],
        ],
    ];

    protected int $count = 0;
}
