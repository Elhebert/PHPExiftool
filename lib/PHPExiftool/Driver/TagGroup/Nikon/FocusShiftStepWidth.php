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
class FocusShiftStepWidth extends AbstractTagGroup
{
    protected string $id = 'Nikon:FocusShiftStepWidth';

    protected string $name = 'FocusShiftStepWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 199761
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:FocusShiftStepWidth',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 200395
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:FocusShiftStepWidth',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 207978
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:FocusShiftStepWidth',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
