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
class CommanderGroupB_TTL_AAComp extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CommanderGroupB_TTL-AAComp';

    protected string $name = 'CommanderGroupB_TTL-AAComp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Commander Group B TTL-AA Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153940
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:CommanderGroupB_TTL-AAComp',
            'desc' => [
                'en' => 'Commander Group B TTL-AA Comp',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154227
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:CommanderGroupB_TTL-AAComp',
            'desc' => [
                'en' => 'Commander Group B TTL-AA Comp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
