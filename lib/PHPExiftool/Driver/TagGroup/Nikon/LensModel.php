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
class LensModel extends AbstractTagGroup
{
    protected string $id = 'Nikon:LensModel';

    protected string $name = 'LensModel';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData0400
             * line : 195910
             * type : string
             * writable : true
             * count : 64
             * flags : permanent
             */
            'id' => 'Nikon::LensData0400.Nikon:LensModel',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData0402
             * line : 195931
             * type : string
             * writable : true
             * count : 64
             * flags : permanent
             */
            'id' => 'Nikon::LensData0402.Nikon:LensModel',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0403
             * line : 195952
             * type : string
             * writable : true
             * count : 64
             * flags : permanent
             */
            'id' => 'Nikon::LensData0403.Nikon:LensModel',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::NCTG
             * line : 202727
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:LensModel',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 64;

    protected int $flags = 2052;
}
