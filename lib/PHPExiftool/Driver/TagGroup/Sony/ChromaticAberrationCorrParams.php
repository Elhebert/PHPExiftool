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
class ChromaticAberrationCorrParams extends AbstractTagGroup
{
    protected string $id = 'Sony:ChromaticAberrationCorrParams';

    protected string $name = 'ChromaticAberrationCorrParams';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9405a
             * line : 387563
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405a.Sony:ChromaticAberrationCorrParams',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 390230
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 390234
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 390238
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 390242
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 390246
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9416
             * line : 393389
             * type : int16s
             * writable : false
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:ChromaticAberrationCorrParams',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9416
             * line : 393393
             * type : int16s
             * writable : false
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:ChromaticAberrationCorrParams',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 32;

    protected int $flags = 2052;
}
