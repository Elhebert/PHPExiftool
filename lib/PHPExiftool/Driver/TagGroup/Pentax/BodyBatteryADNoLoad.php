<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BodyBatteryADNoLoad extends AbstractTagGroup
{
    protected string $id = 'Pentax:BodyBatteryADNoLoad';

    protected string $name = 'BodyBatteryADNoLoad';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Body Battery A/D No Load',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::BatteryInfo
             * line : 196914
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryADNoLoad',
            'desc' => [
                'en' => 'Body Battery A/D No Load',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::BatteryInfo
             * line : 196917
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryADNoLoad',
            'desc' => [
                'en' => 'Body Battery A/D No Load',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
