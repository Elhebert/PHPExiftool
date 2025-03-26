<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Saturation extends AbstractTagGroup
{
    protected string $id = 'Sony:Saturation';

    protected string $name = 'Saturation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243297
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243969
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Main
             * line : 246791
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
