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
class AF_OnForMB_D10 extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AF-OnForMB-D10';

    protected string $name = 'AF-OnForMB-D10';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF-On For MB-D10',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142555
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AF-OnForMB-D10',
            'desc' => [
                'en' => 'AF-On For MB-D10',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151467
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:AF-OnForMB-D10',
            'desc' => [
                'en' => 'AF-On For MB-D10',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
