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
class Compression extends AbstractTagGroup
{
    protected string $id = 'IFD0:Compression';

    protected string $name = 'Compression';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Compression',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81210
             * type : int16u
             * writable : true
             * count :
             * flags : mandatory,unsafe
             */
            'id' => 'Exif::Main.IFD0:Compression',
            'desc' => [
                'en' => 'Compression',
            ],
        ],
        1 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194566
             * type : int16u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'PanasonicRaw::Main.IFD0:Compression',
            'desc' => [
                'en' => 'Compression',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
