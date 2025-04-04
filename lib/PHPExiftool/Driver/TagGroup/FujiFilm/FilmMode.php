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
class FilmMode extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:FilmMode';

    protected string $name = 'FilmMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Film Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 90191
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:FilmMode',
            'desc' => [
                'en' => 'Film Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
