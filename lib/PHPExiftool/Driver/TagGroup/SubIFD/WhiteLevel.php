<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteLevel extends AbstractTagGroup
{
    protected string $id = 'SubIFD:WhiteLevel';

    protected string $name = 'WhiteLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84138
             * type : int32u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:WhiteLevel',
            'desc' => [
                'en' => 'White Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
