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
class SonyImageHeight extends AbstractTagGroup
{
    protected string $id = 'Sony:SonyImageHeight';

    protected string $name = 'SonyImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sony Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::PMP
             * line : 251733
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PMP.Sony:SonyImageHeight',
            'desc' => [
                'en' => 'Sony Image Height',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::ShotInfo
             * line : 252075
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ShotInfo.Sony:SonyImageHeight',
            'desc' => [
                'en' => 'Sony Image Height',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9400a
             * line : 270854
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400a.Sony:SonyImageHeight',
            'desc' => [
                'en' => 'Sony Image Height',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9400b
             * line : 271027
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400b.Sony:SonyImageHeight',
            'desc' => [
                'en' => 'Sony Image Height',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 271250
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:SonyImageHeight',
            'desc' => [
                'en' => 'Sony Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
