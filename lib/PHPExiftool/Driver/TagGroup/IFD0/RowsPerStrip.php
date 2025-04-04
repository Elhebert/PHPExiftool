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
class RowsPerStrip extends AbstractTagGroup
{
    protected string $id = 'IFD0:RowsPerStrip';

    protected string $name = 'RowsPerStrip';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rows Per Strip',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81508
             * type : int32u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:RowsPerStrip',
            'desc' => [
                'en' => 'Rows Per Strip',
            ],
        ],
        1 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194687
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::Main.IFD0:RowsPerStrip',
            'desc' => [
                'en' => 'Rows Per Strip',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
