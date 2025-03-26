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
class Contrast extends AbstractTagGroup
{
    protected string $id = 'Nikon:Contrast';

    protected string $name = 'Contrast';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Contrast',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 137364
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:Contrast',
            'desc' => [
                'en' => 'Contrast',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 137476
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:Contrast',
            'desc' => [
                'en' => 'Contrast',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137591
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:Contrast',
            'desc' => [
                'en' => 'Contrast',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
