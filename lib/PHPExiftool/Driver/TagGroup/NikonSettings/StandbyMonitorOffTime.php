<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StandbyMonitorOffTime extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:StandbyMonitorOffTime';

    protected string $name = 'StandbyMonitorOffTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Standby Monitor Off Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 166830
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:StandbyMonitorOffTime',
            'desc' => [
                'en' => 'Standby Monitor Off Time',
            ],
        ],
        1 => [
            /**
             * table_name : NikonSettings::Main
             * line : 166862
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:StandbyMonitorOffTime',
            'desc' => [
                'en' => 'Standby Monitor Off Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
