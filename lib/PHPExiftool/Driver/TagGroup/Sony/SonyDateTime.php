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
class SonyDateTime extends AbstractTagGroup
{
    protected string $id = 'Sony:SonyDateTime';

    protected string $name = 'SonyDateTime';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sony Date Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::ShotInfo
             * line : 252072
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Sony::ShotInfo.Sony:SonyDateTime',
            'desc' => [
                'en' => 'Sony Date Time',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252724
             * type : undef
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:SonyDateTime',
            'desc' => [
                'en' => 'Sony Date Time',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253395
             * type : undef
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:SonyDateTime',
            'desc' => [
                'en' => 'Sony Date Time',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254060
             * type : undef
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:SonyDateTime',
            'desc' => [
                'en' => 'Sony Date Time',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254711
             * type : undef
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:SonyDateTime',
            'desc' => [
                'en' => 'Sony Date Time',
            ],
        ],
    ];

    protected int $flags = 2052;
}
