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
class ColorSequence extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:ColorSequence';

    protected string $name = 'ColorSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Color Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82362
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:ColorSequence',
            'desc' => [
                'en' => 'Color Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
