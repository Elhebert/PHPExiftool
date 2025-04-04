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
class SamplesPerPixel extends AbstractTagGroup
{
    protected string $id = 'IFD0:SamplesPerPixel';

    protected string $name = 'SamplesPerPixel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Samples Per Pixel',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81505
             * type : int16u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:SamplesPerPixel',
            'desc' => [
                'en' => 'Samples Per Pixel',
            ],
        ],
        1 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194540
             * type : int16u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'PanasonicRaw::Main.IFD0:SamplesPerPixel',
            'desc' => [
                'en' => 'Samples Per Pixel',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
