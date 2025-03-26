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
class CommanderGroupA_TTL_AAComp extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CommanderGroupA_TTL-AAComp';

    protected string $name = 'CommanderGroupA_TTL-AAComp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Commander Group A TTL-AA Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153934
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:CommanderGroupA_TTL-AAComp',
            'desc' => [
                'en' => 'Commander Group A TTL-AA Comp',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154224
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:CommanderGroupA_TTL-AAComp',
            'desc' => [
                'en' => 'Commander Group A TTL-AA Comp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
