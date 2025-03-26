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
class FlashRedEyeMode extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:FlashRedEyeMode';

    protected string $name = 'FlashRedEyeMode';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Red Eye Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 288023
             * type : boolean
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::exif.XMP-exif:FlashRedEyeMode',
            'desc' => [
                'en' => 'Flash Red Eye Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
