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
class OrientationOffset extends AbstractTagGroup
{
    protected string $id = 'Nikon:OrientationOffset';

    protected string $name = 'OrientationOffset';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Orientation Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139308
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:OrientationOffset',
            'desc' => [
                'en' => 'Orientation Offset',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140051
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:OrientationOffset',
            'desc' => [
                'en' => 'Orientation Offset',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 140522
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:OrientationOffset',
            'desc' => [
                'en' => 'Orientation Offset',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 141060
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:OrientationOffset',
            'desc' => [
                'en' => 'Orientation Offset',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141164
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:OrientationOffset',
            'desc' => [
                'en' => 'Orientation Offset',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 141231
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:OrientationOffset',
            'desc' => [
                'en' => 'Orientation Offset',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
