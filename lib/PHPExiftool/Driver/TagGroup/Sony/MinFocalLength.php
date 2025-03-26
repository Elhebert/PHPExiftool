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
class MinFocalLength extends AbstractTagGroup
{
    protected string $id = 'Sony:MinFocalLength';

    protected string $name = 'MinFocalLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Min Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255298
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257922
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258587
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 261211
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263835
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9416
             * line : 278928
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
