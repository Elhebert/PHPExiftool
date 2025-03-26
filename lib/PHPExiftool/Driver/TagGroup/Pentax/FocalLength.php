<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalLength extends AbstractTagGroup
{
    protected string $id = 'Pentax:FocalLength';

    protected string $name = 'FocalLength';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::MOV
             * line : 205967
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::MOV.Pentax:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Main
             * line : 207839
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::Main
             * line : 207842
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 209731
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::PENT.Pentax:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
