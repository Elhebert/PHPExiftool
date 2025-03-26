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
        'en' => 'Picture Control Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 137335
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:PictureControlVersion',
            'desc' => [
                'en' => 'Picture Control Version',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 137444
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:PictureControlVersion',
            'desc' => [
                'en' => 'Picture Control Version',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137556
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:PictureControlVersion',
            'desc' => [
                'en' => 'Picture Control Version',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::PictureControlUnknown
             * line : 137671
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::PictureControlUnknown.Nikon:PictureControlVersion',
            'desc' => [
                'en' => 'Picture Control Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
