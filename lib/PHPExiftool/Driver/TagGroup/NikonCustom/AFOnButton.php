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
class AFOnButton extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AFOnButton';

    protected string $name = 'AFOnButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF On Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142506
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AFOnButton',
            'desc' => [
                'en' => 'AF On Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145253
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AFOnButton',
            'desc' => [
                'en' => 'AF On Button',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 159506
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:AFOnButton',
            'desc' => [
                'en' => 'AF On Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
