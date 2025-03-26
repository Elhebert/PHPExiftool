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
class WhiteBalanceSetting extends AbstractTagGroup
{
    protected string $id = 'Sony:WhiteBalanceSetting';

    protected string $name = 'WhiteBalanceSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 346780
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:WhiteBalanceSetting',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 348389
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:WhiteBalanceSetting',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 350384
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:WhiteBalanceSetting',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360253
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:WhiteBalanceSetting',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
