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
class Gamma extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:Gamma';

    protected string $name = 'Gamma';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Gamma',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83718
             * type : rational64u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:Gamma',
            'desc' => [
                'en' => 'Gamma',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
