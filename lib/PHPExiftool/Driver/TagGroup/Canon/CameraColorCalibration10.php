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
class CameraColorCalibration10 extends AbstractTagGroup
{
    protected string $id = 'Canon:CameraColorCalibration10';

    protected string $name = 'CameraColorCalibration10';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Color Calibration 10',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCalib
             * line : 45791
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCalib.Canon:CameraColorCalibration10',
            'desc' => [
                'en' => 'Camera Color Calibration 10',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCalib2
             * line : 45840
             * type : int16s
             * writable : true
             * count : 5
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCalib2.Canon:CameraColorCalibration10',
            'desc' => [
                'en' => 'Camera Color Calibration 10',
            ],
        ],
    ];

    protected int $flags = 2084;
}
