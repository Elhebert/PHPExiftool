<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PhotoshopThumbnail extends AbstractTagGroup
{
    protected string $id = 'Photoshop:PhotoshopThumbnail';

    protected string $name = 'PhotoshopThumbnail';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Photoshop Thumbnail',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Main
             * line : 212292
             * type : undef
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Photoshop::Main.Photoshop:PhotoshopThumbnail',
            'desc' => [
                'en' => 'Photoshop Thumbnail',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
