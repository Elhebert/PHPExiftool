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
class LimitAF_AreaModeSelWideAF_L extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:LimitAF-AreaModeSelWideAF_L';

    protected string $name = 'LimitAF-AreaModeSelWideAF_L';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Limit AF-Area Mode Sel Wide AF L',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158575
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:LimitAF-AreaModeSelWideAF_L',
            'desc' => [
                'en' => 'Limit AF-Area Mode Sel Wide AF L',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
