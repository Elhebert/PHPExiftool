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
class FlashMasterCompensation extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashMasterCompensation';

    protected string $name = 'FlashMasterCompensation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Master Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 135011
             * type : int8s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashMasterCompensation',
            'desc' => [
                'en' => 'Flash Master Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135833
             * type : int8s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashMasterCompensation',
            'desc' => [
                'en' => 'Flash Master Compensation',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140313
             * type : int8s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:FlashMasterCompensation',
            'desc' => [
                'en' => 'Flash Master Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
