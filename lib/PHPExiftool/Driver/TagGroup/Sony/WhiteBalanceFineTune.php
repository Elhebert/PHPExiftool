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
class WhiteBalanceFineTune extends AbstractTagGroup
{
    protected string $id = 'Sony:WhiteBalanceFineTune';

    protected string $name = 'WhiteBalanceFineTune';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance Fine Tune',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243045
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:WhiteBalanceFineTune',
            'desc' => [
                'en' => 'White Balance Fine Tune',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243781
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:WhiteBalanceFineTune',
            'desc' => [
                'en' => 'White Balance Fine Tune',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Main
             * line : 246727
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:WhiteBalanceFineTune',
            'desc' => [
                'en' => 'White Balance Fine Tune',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
