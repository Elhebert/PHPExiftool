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
class Func3Button extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:Func3Button';

    protected string $name = 'Func3Button';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Func 3 Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147966
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:Func3Button',
            'desc' => [
                'en' => 'Func 3 Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 161762
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:Func3Button',
            'desc' => [
                'en' => 'Func 3 Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
