<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PanasonicRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBType4 extends AbstractTagGroup
{
    protected string $id = 'PanasonicRaw:WBType4';

    protected string $name = 'WBType4';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB Type 4',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PanasonicRaw::WBInfo
             * line : 194945
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::WBInfo.PanasonicRaw:WBType4',
            'desc' => [
                'en' => 'WB Type 4',
            ],
        ],
        1 => [
            /**
             * table_name : PanasonicRaw::WBInfo2
             * line : 195470
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::WBInfo2.PanasonicRaw:WBType4',
            'desc' => [
                'en' => 'WB Type 4',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
