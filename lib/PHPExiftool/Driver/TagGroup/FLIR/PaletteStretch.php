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
class PaletteStretch extends AbstractTagGroup
{
    protected string $id = 'FLIR:PaletteStretch';

    protected string $name = 'PaletteStretch';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::PaletteInfo
             * line : 123535
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::PaletteInfo.FLIR:PaletteStretch',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
