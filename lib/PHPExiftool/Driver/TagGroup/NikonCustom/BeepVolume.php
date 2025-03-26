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
class BeepVolume extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:BeepVolume';

    protected string $name = 'BeepVolume';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Beep Volume',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152662
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:BeepVolume',
            'desc' => [
                'en' => 'Beep Volume',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
