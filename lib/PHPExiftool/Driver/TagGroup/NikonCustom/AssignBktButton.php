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
class AssignBktButton extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AssignBktButton';

    protected string $name = 'AssignBktButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Assign Bkt Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142604
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AssignBktButton',
            'desc' => [
                'en' => 'Assign Bkt Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144605
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AssignBktButton',
            'desc' => [
                'en' => 'Assign Bkt Button',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146530
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:AssignBktButton',
            'desc' => [
                'en' => 'Assign Bkt Button',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148561
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:AssignBktButton',
            'desc' => [
                'en' => 'Assign Bkt Button',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154884
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AssignBktButton',
            'desc' => [
                'en' => 'Assign Bkt Button',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156379
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AssignBktButton',
            'desc' => [
                'en' => 'Assign Bkt Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
