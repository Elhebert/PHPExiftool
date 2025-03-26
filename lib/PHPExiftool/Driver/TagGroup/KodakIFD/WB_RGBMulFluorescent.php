<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBMulFluorescent extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:WB_RGBMulFluorescent';

    protected string $name = 'WB_RGBMulFluorescent';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 155245
             * type : rational64u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:WB_RGBMulFluorescent',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
