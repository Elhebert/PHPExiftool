<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsFlash extends AbstractTagGroup
{
    protected string $id = 'Nikon:WB_RGGBLevelsFlash';

    protected string $name = 'WB_RGGBLevelsFlash';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ColorBalanceB
             * line : 130165
             * type : int32u
             * writable : true
             * count : 4
             * flags : permanent,unsafe
             */
            'id' => 'Nikon::ColorBalanceB.Nikon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2068;
}
