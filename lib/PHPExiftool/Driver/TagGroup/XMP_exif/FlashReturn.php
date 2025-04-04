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
class FlashReturn extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:FlashReturn';

    protected string $name = 'FlashReturn';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Return',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 288034
             * type : integer
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::exif.XMP-exif:FlashReturn',
            'desc' => [
                'en' => 'Flash Return',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
