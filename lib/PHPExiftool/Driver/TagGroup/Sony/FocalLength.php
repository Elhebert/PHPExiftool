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
class FocalLength extends AbstractTagGroup
{
    protected string $id = 'Sony:FocalLength';

    protected string $name = 'FocalLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242557
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::PMP
             * line : 251785
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PMP.Sony:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255295
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257919
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258584
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 261208
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263832
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9416
             * line : 278925
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
