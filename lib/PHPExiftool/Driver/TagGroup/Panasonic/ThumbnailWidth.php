<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailWidth extends AbstractTagGroup
{
    protected string $id = 'Panasonic:ThumbnailWidth';

    protected string $name = 'ThumbnailWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thumbnail Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::PANA
             * line : 193828
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::PANA.Panasonic:ThumbnailWidth',
            'desc' => [
                'en' => 'Thumbnail Width',
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::PANA
             * line : 193837
             * type : int32uRev
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::PANA.Panasonic:ThumbnailWidth',
            'desc' => [
                'en' => 'Thumbnail Width',
            ],
        ],
        2 => [
            /**
             * table_name : Panasonic::PANA
             * line : 193849
             * type : int32uRev
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::PANA.Panasonic:ThumbnailWidth',
            'desc' => [
                'en' => 'Thumbnail Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
