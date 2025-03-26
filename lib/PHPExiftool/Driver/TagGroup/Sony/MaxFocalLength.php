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
        'en' => 'Max Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255301
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257925
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258590
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 261214
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263838
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9416
             * line : 278931
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
