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
class RangeFinder extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:RangeFinder';

    protected string $name = 'RangeFinder';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Range Finder',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 149970
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:RangeFinder',
            'desc' => [
                'en' => 'Range Finder',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150311
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:RangeFinder',
            'desc' => [
                'en' => 'Range Finder',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150647
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:RangeFinder',
            'desc' => [
                'en' => 'Range Finder',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
