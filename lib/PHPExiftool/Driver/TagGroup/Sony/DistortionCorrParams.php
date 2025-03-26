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
class DistortionCorrParams extends AbstractTagGroup
{
    protected string $id = 'Sony:DistortionCorrParams';

    protected string $name = 'DistortionCorrParams';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363899
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:DistortionCorrParams',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366951
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:DistortionCorrParams',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370982
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:DistortionCorrParams',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373983
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:DistortionCorrParams',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376984
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:DistortionCorrParams',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9405a
             * line : 387567
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9405a.Sony:DistortionCorrParams',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 390201
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:DistortionCorrParams',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9416
             * line : 393262
             * type : int16s
             * writable : false
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:DistortionCorrParams',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 16;

    protected int $flags = 2052;
}
