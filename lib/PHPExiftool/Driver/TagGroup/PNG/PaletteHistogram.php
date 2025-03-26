<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PaletteHistogram extends AbstractTagGroup
{
    protected string $id = 'PNG:PaletteHistogram';

    protected string $name = 'PaletteHistogram';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Palette Histogram',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PNG::Main
             * line : 190388
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'PNG::Main.PNG:PaletteHistogram',
            'desc' => [
                'en' => 'Palette Histogram',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
