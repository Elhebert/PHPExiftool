<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BatteryLevelGrip2 extends AbstractTagGroup
{
    protected string $id = 'Sony:BatteryLevelGrip2';

    protected string $name = 'BatteryLevelGrip2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Battery Level Grip 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9406
             * line : 276021
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9406.Sony:BatteryLevelGrip2',
            'desc' => [
                'en' => 'Battery Level Grip 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
