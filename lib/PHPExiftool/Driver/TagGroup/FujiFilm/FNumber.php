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
class FNumber extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:FNumber';

    protected string $name = 'FNumber';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'F Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::MOV
             * line : 89337
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::MOV.FujiFilm:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
