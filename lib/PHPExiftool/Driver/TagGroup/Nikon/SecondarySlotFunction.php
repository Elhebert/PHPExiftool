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
class SecondarySlotFunction extends AbstractTagGroup
{
    protected string $id = 'Nikon:SecondarySlotFunction';

    protected string $name = 'SecondarySlotFunction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Secondary Slot Function',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136098
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:SecondarySlotFunction',
            'desc' => [
                'en' => 'Secondary Slot Function',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 138724
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:SecondarySlotFunction',
            'desc' => [
                'en' => 'Secondary Slot Function',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 140525
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:SecondarySlotFunction',
            'desc' => [
                'en' => 'Secondary Slot Function',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
