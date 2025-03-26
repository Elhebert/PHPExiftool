<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SelfTimerShotInterval extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:SelfTimerShotInterval';

    protected string $name = 'SelfTimerShotInterval';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Self Timer Shot Interval',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144741
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:SelfTimerShotInterval',
            'desc' => [
                'en' => 'Self Timer Shot Interval',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146655
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:SelfTimerShotInterval',
            'desc' => [
                'en' => 'Self Timer Shot Interval',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148686
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:SelfTimerShotInterval',
            'desc' => [
                'en' => 'Self Timer Shot Interval',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151174
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:SelfTimerShotInterval',
            'desc' => [
                'en' => 'Self Timer Shot Interval',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155094
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:SelfTimerShotInterval',
            'desc' => [
                'en' => 'Self Timer Shot Interval',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156504
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:SelfTimerShotInterval',
            'desc' => [
                'en' => 'Self Timer Shot Interval',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158740
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:SelfTimerShotInterval',
            'desc' => [
                'en' => 'Self Timer Shot Interval',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
