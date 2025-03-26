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
class Make extends AbstractTagGroup
{
    protected string $id = 'IFD0:Make';

    protected string $name = 'Make';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81455
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.IFD0:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
        1 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194649
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::Main.IFD0:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
