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
class ThumbnailWidth extends AbstractTagGroup
{
    protected string $id = 'Olympus:ThumbnailWidth';

    protected string $name = 'ThumbnailWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thumbnail Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::OLYM
             * line : 179756
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::OLYM.Olympus:ThumbnailWidth',
            'desc' => [
                'en' => 'Thumbnail Width',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Thumbnail
             * line : 181230
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Thumbnail.Olympus:ThumbnailWidth',
            'desc' => [
                'en' => 'Thumbnail Width',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::thmb2
             * line : 182239
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::thmb2.Olympus:ThumbnailWidth',
            'desc' => [
                'en' => 'Thumbnail Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
