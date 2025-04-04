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
class FlashEnergy extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:FlashEnergy';

    protected string $name = 'FlashEnergy';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Energy',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 287978
             * type : rational
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::exif.XMP-exif:FlashEnergy',
            'desc' => [
                'en' => 'Flash Energy',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
