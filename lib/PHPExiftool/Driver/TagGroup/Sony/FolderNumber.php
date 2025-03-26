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
        'en' => 'Folder Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243713
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FolderNumber',
            'desc' => [
                'en' => 'Folder Number',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245244
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FolderNumber',
            'desc' => [
                'en' => 'Folder Number',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245359
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FolderNumber',
            'desc' => [
                'en' => 'Folder Number',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245979
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FolderNumber',
            'desc' => [
                'en' => 'Folder Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
