<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsUsed extends AbstractTagGroup
{
    protected string $id = 'Nikon:AFPointsUsed';

    protected string $name = 'AFPointsUsed';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Points Used',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128818
             * type : undef
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128821
             * type : undef
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128865
             * type : undef
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128868
             * type : undef
             * writable : true
             * count : 17
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128871
             * type : undef
             * writable : true
             * count : 21
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128874
             * type : undef
             * writable : true
             * count : 29
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128877
             * type : undef
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128880
             * type : undef
             * writable : true
             * count : 13
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        8 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128883
             * type : undef
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
        9 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128886
             * type : undef
             * writable : true
             * count : 14
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
            'desc' => [
                'en' => 'AF Points Used',
            ],
        ],
    ];

    protected int $flags = 2052;
}
