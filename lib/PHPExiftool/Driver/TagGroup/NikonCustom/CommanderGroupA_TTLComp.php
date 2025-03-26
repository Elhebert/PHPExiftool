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
class CommanderGroupA_TTLComp extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CommanderGroupA_TTLComp';

    protected string $name = 'CommanderGroupA_TTLComp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Commander Group A TTL Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158420
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:CommanderGroupA_TTLComp',
            'desc' => [
                'en' => 'Commander Group A TTL Comp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
