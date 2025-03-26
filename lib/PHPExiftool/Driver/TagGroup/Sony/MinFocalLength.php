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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366928
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:MinFocalLength',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369929
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:MinFocalLength',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370959
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:MinFocalLength',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373960
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:MinFocalLength',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376961
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:MinFocalLength',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9416
             * line : 393361
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:MinFocalLength',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
