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
class Model extends AbstractTagGroup
{
    protected string $id = 'IFD0:Model';

    protected string $name = 'Model';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Model Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81458
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.IFD0:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        1 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194652
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::Main.IFD0:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
