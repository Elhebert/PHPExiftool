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
class DistortionCorrParamsPresent extends AbstractTagGroup
{
    protected string $id = 'Sony:DistortionCorrParamsPresent';

    protected string $name = 'DistortionCorrParamsPresent';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Distortion Corr Params Present',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 257244
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:DistortionCorrParamsPresent',
            'desc' => [
                'en' => 'Distortion Corr Params Present',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 260533
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:DistortionCorrParamsPresent',
            'desc' => [
                'en' => 'Distortion Corr Params Present',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 263157
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:DistortionCorrParamsPresent',
            'desc' => [
                'en' => 'Distortion Corr Params Present',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 265781
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:DistortionCorrParamsPresent',
            'desc' => [
                'en' => 'Distortion Corr Params Present',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 268052
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:DistortionCorrParamsPresent',
            'desc' => [
                'en' => 'Distortion Corr Params Present',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 270387
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:DistortionCorrParamsPresent',
            'desc' => [
                'en' => 'Distortion Corr Params Present',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9405a
             * line : 271714
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405a.Sony:DistortionCorrParamsPresent',
            'desc' => [
                'en' => 'Distortion Corr Params Present',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 274013
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:DistortionCorrParamsPresent',
            'desc' => [
                'en' => 'Distortion Corr Params Present',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
