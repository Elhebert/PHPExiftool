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
class MovieFunc1Button extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MovieFunc1Button';

    protected string $name = 'MovieFunc1Button';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie Func 1 Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146943
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:MovieFunc1Button',
            'desc' => [
                'en' => 'Movie Func 1 Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148974
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:MovieFunc1Button',
            'desc' => [
                'en' => 'Movie Func 1 Button',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156792
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:MovieFunc1Button',
            'desc' => [
                'en' => 'Movie Func 1 Button',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 160869
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:MovieFunc1Button',
            'desc' => [
                'en' => 'Movie Func 1 Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
