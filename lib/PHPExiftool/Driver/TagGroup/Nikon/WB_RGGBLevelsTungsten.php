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
class WB_RGGBLevelsTungsten extends AbstractTagGroup
{
    protected string $id = 'Nikon:WB_RGGBLevelsTungsten';

    protected string $name = 'WB_RGGBLevelsTungsten';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Tungsten',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ColorBalanceB
             * line : 130159
             * type : int32u
             * writable : true
             * count : 4
             * flags : permanent,unsafe
             */
            'id' => 'Nikon::ColorBalanceB.Nikon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ColorBalanceC
             * line : 130196
             * type : int32u
             * writable : true
             * count : 4
             * flags : permanent,unsafe
             */
            'id' => 'Nikon::ColorBalanceC.Nikon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2068;
}
