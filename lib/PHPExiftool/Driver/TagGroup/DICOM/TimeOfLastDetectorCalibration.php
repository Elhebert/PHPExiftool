<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeOfLastDetectorCalibration extends AbstractTagGroup
{
    protected string $id = 'DICOM:TimeOfLastDetectorCalibration';

    protected string $name = 'TimeOfLastDetectorCalibration';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Time Of Last Detector Calibration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69820
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TimeOfLastDetectorCalibration',
            'desc' => [
                'en' => 'Time Of Last Detector Calibration',
            ],
        ],
    ];

    protected int $count = 0;
}
