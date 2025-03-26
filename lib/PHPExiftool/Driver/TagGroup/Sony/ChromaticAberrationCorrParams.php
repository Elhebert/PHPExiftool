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
        'en' => 'Chromatic Aberration Corr Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9405a
             * line : 273673
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405a.Sony:ChromaticAberrationCorrParams',
            'desc' => [
                'en' => 'Chromatic Aberration Corr Params',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 275993
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
                'en' => 'Chromatic Aberration Corr Params',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 275996
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
                'en' => 'Chromatic Aberration Corr Params',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 275999
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
                'en' => 'Chromatic Aberration Corr Params',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 276002
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
                'en' => 'Chromatic Aberration Corr Params',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 276005
             * type : int16s
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ChromaticAberrationCorrParams',
            'desc' => [
                'en' => 'Chromatic Aberration Corr Params',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9416
             * line : 278940
             * type : int16s
             * writable : false
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:ChromaticAberrationCorrParams',
            'desc' => [
                'en' => 'Chromatic Aberration Corr Params',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9416
             * line : 278943
             * type : int16s
             * writable : false
             * count : 32
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:ChromaticAberrationCorrParams',
            'desc' => [
                'en' => 'Chromatic Aberration Corr Params',
            ],
        ],
    ];

    protected int $count = 32;

    protected int $flags = 2052;
}
