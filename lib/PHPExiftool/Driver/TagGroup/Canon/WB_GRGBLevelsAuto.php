<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_GRGBLevelsAuto extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_GRGBLevelsAuto';

    protected string $name = 'WB_GRGBLevelsAuto';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB GRGB Levels Auto',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::WBInfo
             * line : 53156
             * type : int32s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::WBInfo.Canon:WB_GRGBLevelsAuto',
            'desc' => [
                'en' => 'WB GRGB Levels Auto',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
