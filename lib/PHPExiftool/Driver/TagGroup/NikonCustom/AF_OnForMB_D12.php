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
class AF_OnForMB_D12 extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AF-OnForMB-D12';

    protected string $name = 'AF-OnForMB-D12';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF-On For MB-D12',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155655
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AF-OnForMB-D12',
            'desc' => [
                'en' => 'AF-On For MB-D12',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
