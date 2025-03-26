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
class Face4Name extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:Face4Name';

    protected string $name = 'Face4Name';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Face 4 Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::FaceRecInfo
             * line : 89142
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::FaceRecInfo.FujiFilm:Face4Name',
            'desc' => [
                'en' => 'Face 4 Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
