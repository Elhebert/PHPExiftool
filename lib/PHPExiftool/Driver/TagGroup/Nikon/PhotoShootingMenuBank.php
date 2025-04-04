<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PhotoShootingMenuBank extends AbstractTagGroup
{
    protected string $id = 'Nikon:PhotoShootingMenuBank';

    protected string $name = 'PhotoShootingMenuBank';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Photo Shooting Menu Bank',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135367
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:PhotoShootingMenuBank',
            'desc' => [
                'en' => 'Photo Shooting Menu Bank',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139652
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:PhotoShootingMenuBank',
            'desc' => [
                'en' => 'Photo Shooting Menu Bank',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 141083
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:PhotoShootingMenuBank',
            'desc' => [
                'en' => 'Photo Shooting Menu Bank',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
