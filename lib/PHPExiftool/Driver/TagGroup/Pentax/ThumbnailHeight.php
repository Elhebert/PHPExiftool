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
class ThumbnailHeight extends AbstractTagGroup
{
    protected string $id = 'Pentax:ThumbnailHeight';

    protected string $name = 'ThumbnailHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thumbnail Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Junk2
             * line : 200063
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Junk2.Pentax:ThumbnailHeight',
            'desc' => [
                'en' => 'Thumbnail Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
