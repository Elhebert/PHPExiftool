<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Face8Category extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:Face8Category';

    protected string $name = 'Face8Category';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Face 8 Category',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::FaceRecInfo
             * line : 89208
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::FaceRecInfo.FujiFilm:Face8Category',
            'desc' => [
                'en' => 'Face 8 Category',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
