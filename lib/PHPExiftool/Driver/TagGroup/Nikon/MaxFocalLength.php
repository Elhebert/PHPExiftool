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
class MaxFocalLength extends AbstractTagGroup
{
    protected string $id = 'Nikon:MaxFocalLength';

    protected string $name = 'MaxFocalLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Max Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData00
             * line : 132481
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData00.Nikon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132524
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132570
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132649
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
