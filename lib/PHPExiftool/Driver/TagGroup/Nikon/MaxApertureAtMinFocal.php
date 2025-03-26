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
class MaxApertureAtMinFocal extends AbstractTagGroup
{
    protected string $id = 'Nikon:MaxApertureAtMinFocal';

    protected string $name = 'MaxApertureAtMinFocal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Max Aperture At Min Focal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData00
             * line : 132484
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData00.Nikon:MaxApertureAtMinFocal',
            'desc' => [
                'en' => 'Max Aperture At Min Focal',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132527
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:MaxApertureAtMinFocal',
            'desc' => [
                'en' => 'Max Aperture At Min Focal',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132573
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:MaxApertureAtMinFocal',
            'desc' => [
                'en' => 'Max Aperture At Min Focal',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132652
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:MaxApertureAtMinFocal',
            'desc' => [
                'en' => 'Max Aperture At Min Focal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
