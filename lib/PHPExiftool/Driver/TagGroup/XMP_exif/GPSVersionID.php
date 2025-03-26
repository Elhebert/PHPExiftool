<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSVersionID extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:GPSVersionID';

    protected string $name = 'GPSVersionID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Version ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 288259
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::exif.XMP-exif:GPSVersionID',
            'desc' => [
                'en' => 'GPS Version ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
