<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailOffset extends AbstractTagGroup
{
    protected string $id = 'Samsung:ThumbnailOffset';

    protected string $name = 'ThumbnailOffset';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thumbnail Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Thumbnail
             * line : 234334
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::Thumbnail.Samsung:ThumbnailOffset',
            'desc' => [
                'en' => 'Thumbnail Offset',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
