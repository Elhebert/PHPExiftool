<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SR2SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevelsFluorescent extends AbstractTagGroup
{
    protected string $id = 'SR2SubIFD:WB_RGBLevelsFluorescent';

    protected string $name = 'WB_RGBLevelsFluorescent';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'WB RGB Levels Fluorescent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::SR2SubIFD
             * line : 251901
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::SR2SubIFD.SR2SubIFD:WB_RGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGB Levels Fluorescent',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::SR2SubIFD
             * line : 251937
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::SR2SubIFD.SR2SubIFD:WB_RGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGB Levels Fluorescent',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
