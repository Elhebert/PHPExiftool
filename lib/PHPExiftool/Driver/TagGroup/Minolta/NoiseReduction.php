<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NoiseReduction extends AbstractTagGroup
{
    protected string $id = 'Minolta:NoiseReduction';

    protected string $name = 'NoiseReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Noise Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122574
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:NoiseReduction',
            'desc' => [
                'en' => 'Noise Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122853
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:NoiseReduction',
            'desc' => [
                'en' => 'Noise Reduction',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123508
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:NoiseReduction',
            'desc' => [
                'en' => 'Noise Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
