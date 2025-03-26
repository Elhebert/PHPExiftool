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
class WangTag3 extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:WangTag3';

    protected string $name = 'WangTag3';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Wang Tag 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82224
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:WangTag3',
            'desc' => [
                'en' => 'Wang Tag 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
