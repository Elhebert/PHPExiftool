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
class PhotoShootingMenuBankImageArea extends AbstractTagGroup
{
    protected string $id = 'Nikon:PhotoShootingMenuBankImageArea';

    protected string $name = 'PhotoShootingMenuBankImageArea';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Photo Shooting Menu Bank Image Area',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135395
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:PhotoShootingMenuBankImageArea',
            'desc' => [
                'en' => 'Photo Shooting Menu Bank Image Area',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139935
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:PhotoShootingMenuBankImageArea',
            'desc' => [
                'en' => 'Photo Shooting Menu Bank Image Area',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 141063
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:PhotoShootingMenuBankImageArea',
            'desc' => [
                'en' => 'Photo Shooting Menu Bank Image Area',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
