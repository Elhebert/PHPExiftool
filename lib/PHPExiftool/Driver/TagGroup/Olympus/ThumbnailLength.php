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
class ThumbnailLength extends AbstractTagGroup
{
    protected string $id = 'Olympus:ThumbnailLength';

    protected string $name = 'ThumbnailLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thumbnail Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Thumbnail
             * line : 181236
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Thumbnail.Olympus:ThumbnailLength',
            'desc' => [
                'en' => 'Thumbnail Length',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::thmb
             * line : 182229
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::thmb.Olympus:ThumbnailLength',
            'desc' => [
                'en' => 'Thumbnail Length',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::thmb2
             * line : 182245
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::thmb2.Olympus:ThumbnailLength',
            'desc' => [
                'en' => 'Thumbnail Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
