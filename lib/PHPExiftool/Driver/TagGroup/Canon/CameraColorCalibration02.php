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
class CameraColorCalibration02 extends AbstractTagGroup
{
    protected string $id = 'Canon:CameraColorCalibration02';

    protected string $name = 'CameraColorCalibration02';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Color Calibration 02',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCalib
             * line : 45767
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCalib.Canon:CameraColorCalibration02',
            'desc' => [
                'en' => 'Camera Color Calibration 02',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCalib2
             * line : 45816
             * type : int16s
             * writable : true
             * count : 5
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCalib2.Canon:CameraColorCalibration02',
            'desc' => [
                'en' => 'Camera Color Calibration 02',
            ],
        ],
    ];

    protected int $flags = 2084;
}
