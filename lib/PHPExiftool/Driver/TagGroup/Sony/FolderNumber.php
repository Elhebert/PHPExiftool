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
class FolderNumber extends AbstractTagGroup
{
    protected string $id = 'Sony:FolderNumber';

    protected string $name = 'FolderNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 348317
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FolderNumber',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 351263
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FolderNumber',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 351442
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FolderNumber',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 352077
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FolderNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
