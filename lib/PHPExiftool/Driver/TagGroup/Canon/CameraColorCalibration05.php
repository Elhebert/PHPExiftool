<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraColorCalibration05 extends AbstractTagGroup
{
    protected string $id = 'Canon:CameraColorCalibration05';

    protected string $name = 'CameraColorCalibration05';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Color Calibration 05',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCalib
             * line : 45776
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCalib.Canon:CameraColorCalibration05',
            'desc' => [
                'en' => 'Camera Color Calibration 05',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCalib2
             * line : 45825
             * type : int16s
             * writable : true
             * count : 5
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCalib2.Canon:CameraColorCalibration05',
            'desc' => [
                'en' => 'Camera Color Calibration 05',
            ],
        ],
    ];

    protected int $flags = 2084;
}
