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
class VerticalFuncButton extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:VerticalFuncButton';

    protected string $name = 'VerticalFuncButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Vertical Func Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145063
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:VerticalFuncButton',
            'desc' => [
                'en' => 'Vertical Func Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147244
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:VerticalFuncButton',
            'desc' => [
                'en' => 'Vertical Func Button',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 161580
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:VerticalFuncButton',
            'desc' => [
                'en' => 'Vertical Func Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
