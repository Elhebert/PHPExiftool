<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTagGroup
{
    protected string $id = 'Olympus:ThumbnailImage';

    protected string $name = 'ThumbnailImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Thumbnail Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 177392
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'Olympus::Main.Olympus:ThumbnailImage',
            'desc' => [
                'en' => 'Thumbnail Image',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::thmb
             * line : 182232
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::thmb.Olympus:ThumbnailImage',
            'desc' => [
                'en' => 'Thumbnail Image',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::thmb2
             * line : 182248
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::thmb2.Olympus:ThumbnailImage',
            'desc' => [
                'en' => 'Thumbnail Image',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
