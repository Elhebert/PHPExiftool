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
class PixelScale extends AbstractTagGroup
{
    protected string $id = 'IFD0:PixelScale';

    protected string $name = 'PixelScale';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Pixel Scale',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82320
             * type : double
             * writable : true
             * count : 3
             * flags :
             */
            'id' => 'Exif::Main.IFD0:PixelScale',
            'desc' => [
                'en' => 'Pixel Scale',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2048;
}
