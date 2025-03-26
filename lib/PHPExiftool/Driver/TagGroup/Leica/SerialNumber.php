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
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'Leica:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Leica2
             * line : 274336
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica2.Leica:SerialNumber',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::Leica5
             * line : 274785
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica5.Leica:SerialNumber',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Panasonic::SerialInfo
             * line : 278899
             * type : string
             * writable : false
             * count : 8
             * flags : permanent
             */
            'id' => 'Panasonic::SerialInfo.Leica:SerialNumber',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Panasonic::Subdir
             * line : 279385
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Subdir.Leica:SerialNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 8;

    protected int $flags = 2052;
}
