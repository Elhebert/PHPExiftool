<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTagGroup
{
    protected string $id = 'Pentax:ThumbnailImage';

    protected string $name = 'ThumbnailImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thumbnail Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Junk2
             * line : 200069
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Junk2.Pentax:ThumbnailImage',
            'desc' => [
                'en' => 'Thumbnail Image',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
