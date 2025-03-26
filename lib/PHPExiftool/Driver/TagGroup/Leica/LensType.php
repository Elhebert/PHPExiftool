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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Data1
             * line : 273964
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Data1.Leica:LensType',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::Leica2
             * line : 274477
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica2.Leica:LensType',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Panasonic::Leica5
             * line : 274774
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica5.Leica:LensType',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Panasonic::Leica6
             * line : 274928
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica6.Leica:LensType',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Panasonic::Subdir
             * line : 279451
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Subdir.Leica:LensType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
