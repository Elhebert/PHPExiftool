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
class PictureControlVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:PictureControlVersion';

    protected string $name = 'PictureControlVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 203615
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:PictureControlVersion',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 203926
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:PictureControlVersion',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 204249
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:PictureControlVersion',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::PictureControlUnknown
             * line : 204575
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::PictureControlUnknown.Nikon:PictureControlVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
