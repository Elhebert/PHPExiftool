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
class FocusShiftInterval extends AbstractTagGroup
{
    protected string $id = 'Nikon:FocusShiftInterval';

    protected string $name = 'FocusShiftInterval';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Focus Shift Interval',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 134768
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:FocusShiftInterval',
            'desc' => [
                'en' => 'Focus Shift Interval',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135353
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:FocusShiftInterval',
            'desc' => [
                'en' => 'Focus Shift Interval',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140115
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:FocusShiftInterval',
            'desc' => [
                'en' => 'Focus Shift Interval',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
