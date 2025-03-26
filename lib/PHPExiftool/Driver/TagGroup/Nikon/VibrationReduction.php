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
class VibrationReduction extends AbstractTagGroup
{
    protected string $id = 'Nikon:VibrationReduction';

    protected string $name = 'VibrationReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Vibration Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 138022
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:VibrationReduction',
            'desc' => [
                'en' => 'Vibration Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 138039
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:VibrationReduction',
            'desc' => [
                'en' => 'Vibration Reduction',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 138053
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:VibrationReduction',
            'desc' => [
                'en' => 'Vibration Reduction',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD40
             * line : 138703
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD40.Nikon:VibrationReduction',
            'desc' => [
                'en' => 'Vibration Reduction',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoD80
             * line : 140407
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD80.Nikon:VibrationReduction',
            'desc' => [
                'en' => 'Vibration Reduction',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::VRInfo
             * line : 141319
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::VRInfo.Nikon:VibrationReduction',
            'desc' => [
                'en' => 'Vibration Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
