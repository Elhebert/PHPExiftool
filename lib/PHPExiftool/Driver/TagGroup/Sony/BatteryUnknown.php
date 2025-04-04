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
class BatteryUnknown extends AbstractTagGroup
{
    protected string $id = 'Sony:BatteryUnknown';

    protected string $name = 'BatteryUnknown';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Battery Unknown',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::ExtraInfo
             * line : 246002
             * type : undef
             * writable : false
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Sony::ExtraInfo.Sony:BatteryUnknown',
            'desc' => [
                'en' => 'Battery Unknown',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246056
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Sony::ExtraInfo3.Sony:BatteryUnknown',
            'desc' => [
                'en' => 'Battery Unknown',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
