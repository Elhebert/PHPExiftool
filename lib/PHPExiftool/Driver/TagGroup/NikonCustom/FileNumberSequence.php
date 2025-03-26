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
class FileNumberSequence extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FileNumberSequence';

    protected string $name = 'FileNumberSequence';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'File Number Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142863
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FileNumberSequence',
            'desc' => [
                'en' => 'File Number Sequence',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142874
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FileNumberSequence',
            'desc' => [
                'en' => 'File Number Sequence',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 149959
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:FileNumberSequence',
            'desc' => [
                'en' => 'File Number Sequence',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150300
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:FileNumberSequence',
            'desc' => [
                'en' => 'File Number Sequence',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150636
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:FileNumberSequence',
            'desc' => [
                'en' => 'File Number Sequence',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151794
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:FileNumberSequence',
            'desc' => [
                'en' => 'File Number Sequence',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152640
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:FileNumberSequence',
            'desc' => [
                'en' => 'File Number Sequence',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157919
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:FileNumberSequence',
            'desc' => [
                'en' => 'File Number Sequence',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158947
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FileNumberSequence',
            'desc' => [
                'en' => 'File Number Sequence',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
