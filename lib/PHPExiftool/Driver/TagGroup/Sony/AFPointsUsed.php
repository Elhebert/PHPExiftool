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
class AFPointsUsed extends AbstractTagGroup
{
    protected string $id = 'Sony:AFPointsUsed';

    protected string $name = 'AFPointsUsed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Points Used',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 238930
             * type : int8u
             * writable : true
             * count : 10
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 240147
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Main
             * line : 247852
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Main
             * line : 247917
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
    ];

    protected int $count = 10;

    protected int $flags = 2052;
}
