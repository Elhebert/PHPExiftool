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
class FlashMode extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:FlashMode';

    protected string $name = 'FlashMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 288003
             * type : integer
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::exif.XMP-exif:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
