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
class SyncReleaseMode extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:SyncReleaseMode';

    protected string $name = 'SyncReleaseMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sync Release Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147681
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:SyncReleaseMode',
            'desc' => [
                'en' => 'Sync Release Mode',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149723
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:SyncReleaseMode',
            'desc' => [
                'en' => 'Sync Release Mode',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 157554
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:SyncReleaseMode',
            'desc' => [
                'en' => 'Sync Release Mode',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158903
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:SyncReleaseMode',
            'desc' => [
                'en' => 'Sync Release Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
