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
class FocusPixel extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:FocusPixel';

    protected string $name = 'FocusPixel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Pixel',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 89735
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:FocusPixel',
            'desc' => [
                'en' => 'Focus Pixel',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
