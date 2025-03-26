<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Orientation extends AbstractTagGroup
{
    protected string $id = 'IFD0:Orientation';

    protected string $name = 'Orientation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81476
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.IFD0:Orientation',
            'desc' => [
                'en' => 'Orientation',
            ],
        ],
        1 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194658
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::Main.IFD0:Orientation',
            'desc' => [
                'en' => 'Orientation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
