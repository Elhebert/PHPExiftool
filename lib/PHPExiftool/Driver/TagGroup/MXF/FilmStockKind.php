<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FilmStockKind extends AbstractTagGroup
{
    protected string $id = 'MXF:FilmStockKind';

    protected string $name = 'FilmStockKind';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Film Stock Kind',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114578
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FilmStockKind',
            'desc' => [
                'en' => 'Film Stock Kind',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115627
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FilmStockKind',
            'desc' => [
                'en' => 'Film Stock Kind',
            ],
        ],
    ];

    protected int $count = 0;
}
