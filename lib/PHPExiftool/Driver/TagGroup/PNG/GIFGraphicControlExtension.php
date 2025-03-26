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
class GIFGraphicControlExtension extends AbstractTagGroup
{
    protected string $id = 'PNG:GIFGraphicControlExtension';

    protected string $name = 'GIFGraphicControlExtension';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GIF Graphic Control Extension',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PNG::Main
             * line : 190379
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'PNG::Main.PNG:GIFGraphicControlExtension',
            'desc' => [
                'en' => 'GIF Graphic Control Extension',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
