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
class LimitAF_AreaModeSelDynamic_S extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:LimitAF-AreaModeSelDynamic_S';

    protected string $name = 'LimitAF-AreaModeSelDynamic_S';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Limit AF-Area Mode Sel Dynamic S',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 162319
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:LimitAF-AreaModeSelDynamic_S',
            'desc' => [
                'en' => 'Limit AF-Area Mode Sel Dynamic S',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
