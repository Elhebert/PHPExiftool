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
class FocalLengthIn35mmFormat extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:FocalLengthIn35mmFormat';

    protected string $name = 'FocalLengthIn35mmFormat';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 117304
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:FocalLengthIn35mmFormat',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
