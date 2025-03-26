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
class Brightness extends AbstractTagGroup
{
    protected string $id = 'Sony:Brightness';

    protected string $name = 'Brightness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Brightness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243303
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:Brightness',
            'desc' => [
                'en' => 'Brightness',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Main
             * line : 246797
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:Brightness',
            'desc' => [
                'en' => 'Brightness',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
