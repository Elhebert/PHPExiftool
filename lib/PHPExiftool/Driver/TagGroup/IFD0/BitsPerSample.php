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
class BitsPerSample extends AbstractTagGroup
{
    protected string $id = 'IFD0:BitsPerSample';

    protected string $name = 'BitsPerSample';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Bits Per Sample',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81207
             * type : int16u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:BitsPerSample',
            'desc' => [
                'en' => 'Bits Per Sample',
            ],
        ],
        1 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194563
             * type : int16u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'PanasonicRaw::Main.IFD0:BitsPerSample',
            'desc' => [
                'en' => 'Bits Per Sample',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
