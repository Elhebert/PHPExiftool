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
class Contrast extends AbstractTagGroup
{
    protected string $id = 'Sony:Contrast';

    protected string $name = 'Contrast';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Contrast',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243294
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:Contrast',
            'desc' => [
                'en' => 'Contrast',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243966
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:Contrast',
            'desc' => [
                'en' => 'Contrast',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Main
             * line : 246788
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:Contrast',
            'desc' => [
                'en' => 'Contrast',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
