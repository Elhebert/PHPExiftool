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
class FocusPosition extends AbstractTagGroup
{
    protected string $id = 'Nikon:FocusPosition';

    protected string $name = 'FocusPosition';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132506
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:FocusPosition',
            'desc' => [
                'en' => 'Focus Position',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132552
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:FocusPosition',
            'desc' => [
                'en' => 'Focus Position',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132631
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:FocusPosition',
            'desc' => [
                'en' => 'Focus Position',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
