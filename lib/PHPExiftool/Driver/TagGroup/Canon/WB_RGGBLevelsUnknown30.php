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
class WB_RGGBLevelsUnknown30 extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsUnknown30';

    protected string $name = 'WB_RGGBLevelsUnknown30';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Unknown 30',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47767
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown30',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 30',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
