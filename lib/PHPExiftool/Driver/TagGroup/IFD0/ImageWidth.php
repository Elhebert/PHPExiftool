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
class ImageWidth extends AbstractTagGroup
{
    protected string $id = 'IFD0:ImageWidth';

    protected string $name = 'ImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81201
             * type : int32u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
