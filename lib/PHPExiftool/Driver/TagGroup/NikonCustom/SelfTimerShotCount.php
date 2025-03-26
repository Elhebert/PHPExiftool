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
class SelfTimerShotCount extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:SelfTimerShotCount';

    protected string $name = 'SelfTimerShotCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Self Timer Shot Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144738
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146672
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148703
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150164
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150494
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150859
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151191
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153122
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155111
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156521
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158219
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
        11 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158737
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:SelfTimerShotCount',
            'desc' => [
                'en' => 'Self Timer Shot Count',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
