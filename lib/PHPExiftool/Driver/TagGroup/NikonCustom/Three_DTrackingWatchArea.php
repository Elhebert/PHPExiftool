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
class Three_DTrackingWatchArea extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:Three-DTrackingWatchArea';

    protected string $name = 'Three-DTrackingWatchArea';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Three-D Tracking Watch Area',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147692
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:Three-DTrackingWatchArea',
            'desc' => [
                'en' => 'Three-D Tracking Watch Area',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149734
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:Three-DTrackingWatchArea',
            'desc' => [
                'en' => 'Three-D Tracking Watch Area',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 157576
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:Three-DTrackingWatchArea',
            'desc' => [
                'en' => 'Three-D Tracking Watch Area',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
