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
        'en' => 'Shot Number Since Power Up',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreInfo0401
             * line : 250882
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreInfo0401.Sony:ShotNumberSincePowerUp',
            'desc' => [
                'en' => 'Shot Number Since Power Up',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9400a
             * line : 270782
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400a.Sony:ShotNumberSincePowerUp',
            'desc' => [
                'en' => 'Shot Number Since Power Up',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9400b
             * line : 270955
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400b.Sony:ShotNumberSincePowerUp',
            'desc' => [
                'en' => 'Shot Number Since Power Up',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 271111
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:ShotNumberSincePowerUp',
            'desc' => [
                'en' => 'Shot Number Since Power Up',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
