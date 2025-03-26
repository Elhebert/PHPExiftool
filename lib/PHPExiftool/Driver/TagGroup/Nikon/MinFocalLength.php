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
class MinFocalLength extends AbstractTagGroup
{
    protected string $id = 'Nikon:MinFocalLength';

    protected string $name = 'MinFocalLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Min Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData00
             * line : 132478
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData00.Nikon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132521
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132567
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132646
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
