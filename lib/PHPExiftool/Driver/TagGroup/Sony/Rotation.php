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
class Rotation extends AbstractTagGroup
{
    protected string $id = 'Sony:Rotation';

    protected string $name = 'Rotation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rotation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243523
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:Rotation',
            'desc' => [
                'en' => 'Rotation',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 244121
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:Rotation',
            'desc' => [
                'en' => 'Rotation',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246429
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:Rotation',
            'desc' => [
                'en' => 'Rotation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
