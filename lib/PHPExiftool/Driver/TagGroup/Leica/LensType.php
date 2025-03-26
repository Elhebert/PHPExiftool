<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensType extends AbstractTagGroup
{
    protected string $id = 'Leica:LensType';

    protected string $name = 'LensType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Data1
             * line : 191065
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Data1.Leica:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::Leica2
             * line : 191371
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica2.Leica:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        2 => [
            /**
             * table_name : Panasonic::Leica5
             * line : 191611
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica5.Leica:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        3 => [
            /**
             * table_name : Panasonic::Leica6
             * line : 191662
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica6.Leica:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        4 => [
            /**
             * table_name : Panasonic::Subdir
             * line : 194038
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Subdir.Leica:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
