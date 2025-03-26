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
class BlockShotAFResponse extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:BlockShotAFResponse';

    protected string $name = 'BlockShotAFResponse';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Block Shot AF Response',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146022
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:BlockShotAFResponse',
            'desc' => [
                'en' => 'Block Shot AF Response',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148054
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:BlockShotAFResponse',
            'desc' => [
                'en' => 'Block Shot AF Response',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155837
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:BlockShotAFResponse',
            'desc' => [
                'en' => 'Block Shot AF Response',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158486
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:BlockShotAFResponse',
            'desc' => [
                'en' => 'Block Shot AF Response',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
