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
class IntervalDurationMinutes extends AbstractTagGroup
{
    protected string $id = 'Nikon:IntervalDurationMinutes';

    protected string $name = 'IntervalDurationMinutes';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Interval Duration Minutes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 134728
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:IntervalDurationMinutes',
            'desc' => [
                'en' => 'Interval Duration Minutes',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
