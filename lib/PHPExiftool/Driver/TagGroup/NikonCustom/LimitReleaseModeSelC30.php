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
class LimitReleaseModeSelC30 extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:LimitReleaseModeSelC30';

    protected string $name = 'LimitReleaseModeSelC30';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Limit Release Mode Sel C30',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 161536
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:LimitReleaseModeSelC30',
            'desc' => [
                'en' => 'Limit Release Mode Sel C30',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
