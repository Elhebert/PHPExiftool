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
class FullHDHighSpeedRec extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:FullHDHighSpeedRec';

    protected string $name = 'FullHDHighSpeedRec';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Full HD High Speed Rec',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 90440
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:FullHDHighSpeedRec',
            'desc' => [
                'en' => 'Full HD High Speed Rec',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
