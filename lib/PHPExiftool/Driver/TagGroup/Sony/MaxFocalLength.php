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
class MaxFocalLength extends AbstractTagGroup
{
    protected string $id = 'Sony:MaxFocalLength';

    protected string $name = 'MaxFocalLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366938
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:MaxFocalLength',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369939
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:MaxFocalLength',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370969
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:MaxFocalLength',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373970
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:MaxFocalLength',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376971
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:MaxFocalLength',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9416
             * line : 393371
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:MaxFocalLength',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
