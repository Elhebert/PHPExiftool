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
class FlickAdvanceDirection extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FlickAdvanceDirection';

    protected string $name = 'FlickAdvanceDirection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flick Advance Direction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 165688
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FlickAdvanceDirection',
            'desc' => [
                'en' => 'Flick Advance Direction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
