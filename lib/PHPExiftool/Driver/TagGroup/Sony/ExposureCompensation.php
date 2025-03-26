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
class ExposureCompensation extends AbstractTagGroup
{
    protected string $id = 'Sony:ExposureCompensation';

    protected string $name = 'ExposureCompensation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::PMP
             * line : 251782
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PMP.Sony:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252295
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252957
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253628
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254944
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257574
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258239
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260863
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263487
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
