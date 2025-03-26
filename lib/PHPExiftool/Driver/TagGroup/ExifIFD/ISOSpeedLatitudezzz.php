<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISOSpeedLatitudezzz extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:ISOSpeedLatitudezzz';

    protected string $name = 'ISOSpeedLatitudezzz';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 113953
             * type : int32u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:ISOSpeedLatitudezzz',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
