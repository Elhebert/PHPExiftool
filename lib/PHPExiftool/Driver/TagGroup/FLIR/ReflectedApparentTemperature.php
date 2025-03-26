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
class ReflectedApparentTemperature extends AbstractTagGroup
{
    protected string $id = 'FLIR:ReflectedApparentTemperature';

    protected string $name = 'ReflectedApparentTemperature';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Reflected Apparent Temperature',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::CameraInfo
             * line : 85581
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::CameraInfo.FLIR:ReflectedApparentTemperature',
            'desc' => [
                'en' => 'Reflected Apparent Temperature',
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::FPF
             * line : 85847
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:ReflectedApparentTemperature',
            'desc' => [
                'en' => 'Reflected Apparent Temperature',
            ],
        ],
        2 => [
            /**
             * table_name : FLIR::Params
             * line : 86375
             * type : float
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Params.FLIR:ReflectedApparentTemperature',
            'desc' => [
                'en' => 'Reflected Apparent Temperature',
            ],
        ],
    ];

    protected int $count = 0;
}
