<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BelowColor extends AbstractTagGroup
{
    protected string $id = 'FLIR:BelowColor';

    protected string $name = 'BelowColor';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Below Color',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::PaletteInfo
             * line : 86322
             * type : int8u
             * writable : false
             * count : 3
             * flags :
             */
            'id' => 'FLIR::PaletteInfo.FLIR:BelowColor',
            'desc' => [
                'en' => 'Below Color',
            ],
        ],
    ];

    protected int $count = 3;
}
