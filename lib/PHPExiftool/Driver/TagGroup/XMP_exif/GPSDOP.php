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
class GPSDOP extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:GPSDOP';

    protected string $name = 'GPSDOP';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 406606
             * type : rational
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::exif.XMP-exif:GPSDOP',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
