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
class MB_D12BatteryType extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MB-D12BatteryType';

    protected string $name = 'MB-D12BatteryType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'MB-D12 Battery Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154379
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:MB-D12BatteryType',
            'desc' => [
                'en' => 'MB-D12 Battery Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
