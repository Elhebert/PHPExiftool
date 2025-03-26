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
class ColorChromeEffect extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:ColorChromeEffect';

    protected string $name = 'ColorChromeEffect';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Chrome Effect',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 89961
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:ColorChromeEffect',
            'desc' => [
                'en' => 'Color Chrome Effect',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
