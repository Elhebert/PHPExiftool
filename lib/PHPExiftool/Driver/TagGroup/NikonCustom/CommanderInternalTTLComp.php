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
class CommanderInternalTTLComp extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CommanderInternalTTLComp';

    protected string $name = 'CommanderInternalTTLComp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Commander Internal TTL Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153928
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:CommanderInternalTTLComp',
            'desc' => [
                'en' => 'Commander Internal TTL Comp',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154221
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:CommanderInternalTTLComp',
            'desc' => [
                'en' => 'Commander Internal TTL Comp',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158395
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:CommanderInternalTTLComp',
            'desc' => [
                'en' => 'Commander Internal TTL Comp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
