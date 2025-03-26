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
class Brightness extends AbstractTagGroup
{
    protected string $id = 'Nikon:Brightness';

    protected string $name = 'Brightness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Brightness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 137367
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:Brightness',
            'desc' => [
                'en' => 'Brightness',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 137479
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:Brightness',
            'desc' => [
                'en' => 'Brightness',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137594
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:Brightness',
            'desc' => [
                'en' => 'Brightness',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
