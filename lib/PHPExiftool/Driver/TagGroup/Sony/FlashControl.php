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
class FlashControl extends AbstractTagGroup
{
    protected string $id = 'Sony:FlashControl';

    protected string $name = 'FlashControl';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Control',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243306
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FlashControl',
            'desc' => [
                'en' => 'Flash Control',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243972
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:FlashControl',
            'desc' => [
                'en' => 'Flash Control',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244832
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FlashControl',
            'desc' => [
                'en' => 'Flash Control',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
