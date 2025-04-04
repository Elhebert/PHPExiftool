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
class FlashBatteryLevel extends AbstractTagGroup
{
    protected string $id = 'Canon:FlashBatteryLevel';

    protected string $name = 'FlashBatteryLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Battery Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46996
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:FlashBatteryLevel',
            'desc' => [
                'en' => 'Flash Battery Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
