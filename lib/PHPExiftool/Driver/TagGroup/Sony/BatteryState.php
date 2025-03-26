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
class BatteryState extends AbstractTagGroup
{
    protected string $id = 'Sony:BatteryState';

    protected string $name = 'BatteryState';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Battery State',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243600
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:BatteryState',
            'desc' => [
                'en' => 'Battery State',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246082
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:BatteryState',
            'desc' => [
                'en' => 'Battery State',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
