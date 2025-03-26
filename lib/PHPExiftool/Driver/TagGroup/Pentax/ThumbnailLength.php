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
class ThumbnailLength extends AbstractTagGroup
{
    protected string $id = 'Pentax:ThumbnailLength';

    protected string $name = 'ThumbnailLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thumbnail Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Junk2
             * line : 200066
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Junk2.Pentax:ThumbnailLength',
            'desc' => [
                'en' => 'Thumbnail Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
