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
class IntervalExposureSmoothing extends AbstractTagGroup
{
    protected string $id = 'Nikon:IntervalExposureSmoothing';

    protected string $name = 'IntervalExposureSmoothing';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Interval Exposure Smoothing',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 134740
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:IntervalExposureSmoothing',
            'desc' => [
                'en' => 'Interval Exposure Smoothing',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140087
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:IntervalExposureSmoothing',
            'desc' => [
                'en' => 'Interval Exposure Smoothing',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
