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
class MaxApertureAtMaxFocal extends AbstractTagGroup
{
    protected string $id = 'Nikon:MaxApertureAtMaxFocal';

    protected string $name = 'MaxApertureAtMaxFocal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData00
             * line : 195598
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData00.Nikon:MaxApertureAtMaxFocal',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 195730
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:MaxApertureAtMaxFocal',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 195871
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:MaxApertureAtMaxFocal',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 196078
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:MaxApertureAtMaxFocal',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
