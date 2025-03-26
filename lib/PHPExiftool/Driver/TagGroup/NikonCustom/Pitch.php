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
class Pitch extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:Pitch';

    protected string $name = 'Pitch';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Pitch',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144066
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:Pitch',
            'desc' => [
                'en' => 'Pitch',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154393
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:Pitch',
            'desc' => [
                'en' => 'Pitch',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
