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
class Face3Birthday extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:Face3Birthday';

    protected string $name = 'Face3Birthday';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Face 3 Birthday',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::FaceRecInfo
             * line : 89105
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::FaceRecInfo.FujiFilm:Face3Birthday',
            'desc' => [
                'en' => 'Face 3 Birthday',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
