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
class CommanderChannel extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CommanderChannel';

    protected string $name = 'CommanderChannel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Commander Channel',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153877
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:CommanderChannel',
            'desc' => [
                'en' => 'Commander Channel',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154150
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:CommanderChannel',
            'desc' => [
                'en' => 'Commander Channel',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
