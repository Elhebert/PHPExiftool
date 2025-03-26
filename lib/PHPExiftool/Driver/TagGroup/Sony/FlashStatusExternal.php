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
class FlashStatusExternal extends AbstractTagGroup
{
    protected string $id = 'Sony:FlashStatusExternal';

    protected string $name = 'FlashStatusExternal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Status External',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245191
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FlashStatusExternal',
            'desc' => [
                'en' => 'Flash Status External',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245317
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FlashStatusExternal',
            'desc' => [
                'en' => 'Flash Status External',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
