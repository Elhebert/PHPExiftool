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
class FlashWarning extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FlashWarning';

    protected string $name = 'FlashWarning';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Warning',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153328
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:FlashWarning',
            'desc' => [
                'en' => 'Flash Warning',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153812
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:FlashWarning',
            'desc' => [
                'en' => 'Flash Warning',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158384
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:FlashWarning',
            'desc' => [
                'en' => 'Flash Warning',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
