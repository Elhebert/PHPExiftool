<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IntervalPriority extends AbstractTagGroup
{
    protected string $id = 'Nikon:IntervalPriority';

    protected string $name = 'IntervalPriority';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Interval Priority',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 134751
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:IntervalPriority',
            'desc' => [
                'en' => 'Interval Priority',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140098
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:IntervalPriority',
            'desc' => [
                'en' => 'Interval Priority',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
