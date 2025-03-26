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
class ShotNumberSincePowerUp extends AbstractTagGroup
{
    protected string $id = 'Sony:ShotNumberSincePowerUp';

    protected string $name = 'ShotNumberSincePowerUp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreInfo0401
             * line : 359794
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreInfo0401.Sony:ShotNumberSincePowerUp',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9400a
             * line : 384055
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400a.Sony:ShotNumberSincePowerUp',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9400b
             * line : 384288
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400b.Sony:ShotNumberSincePowerUp',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 384488
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:ShotNumberSincePowerUp',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
