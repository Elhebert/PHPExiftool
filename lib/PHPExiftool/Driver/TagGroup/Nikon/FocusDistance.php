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
class FocusDistance extends AbstractTagGroup
{
    protected string $id = 'Nikon:FocusDistance';

    protected string $name = 'FocusDistance';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132509
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:FocusDistance',
            'desc' => [
                'en' => 'Focus Distance',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132555
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:FocusDistance',
            'desc' => [
                'en' => 'Focus Distance',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132634
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:FocusDistance',
            'desc' => [
                'en' => 'Focus Distance',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132741
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:FocusDistance',
            'desc' => [
                'en' => 'Focus Distance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
