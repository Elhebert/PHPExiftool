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
class ThumbnailHeight extends AbstractTagGroup
{
    protected string $id = 'Olympus:ThumbnailHeight';

    protected string $name = 'ThumbnailHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thumbnail Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::OLYM
             * line : 179759
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::OLYM.Olympus:ThumbnailHeight',
            'desc' => [
                'en' => 'Thumbnail Height',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Thumbnail
             * line : 181233
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Thumbnail.Olympus:ThumbnailHeight',
            'desc' => [
                'en' => 'Thumbnail Height',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::thmb2
             * line : 182242
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::thmb2.Olympus:ThumbnailHeight',
            'desc' => [
                'en' => 'Thumbnail Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
