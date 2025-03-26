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
class CommanderInternalTTLCompBuiltin extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CommanderInternalTTLCompBuiltin';

    protected string $name = 'CommanderInternalTTLCompBuiltin';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Commander Internal TTL Comp Builtin',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151969
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:CommanderInternalTTLCompBuiltin',
            'desc' => [
                'en' => 'Commander Internal TTL Comp Builtin',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153319
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:CommanderInternalTTLCompBuiltin',
            'desc' => [
                'en' => 'Commander Internal TTL Comp Builtin',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
