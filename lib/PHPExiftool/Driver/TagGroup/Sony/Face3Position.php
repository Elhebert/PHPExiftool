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
class Face3Position extends AbstractTagGroup
{
    protected string $id = 'Sony:Face3Position';

    protected string $name = 'Face3Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 3 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::FaceInfo
             * line : 246232
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Sony::FaceInfo.Sony:Face3Position',
            'desc' => [
                'en' => 'Face 3 Position',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::FaceInfo1
             * line : 246260
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Sony::FaceInfo1.Sony:Face3Position',
            'desc' => [
                'en' => 'Face 3 Position',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::FaceInfo2
             * line : 246288
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Sony::FaceInfo2.Sony:Face3Position',
            'desc' => [
                'en' => 'Face 3 Position',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::FaceInfoA
             * line : 246349
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Sony::FaceInfoA.Sony:Face3Position',
            'desc' => [
                'en' => 'Face 3 Position',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
