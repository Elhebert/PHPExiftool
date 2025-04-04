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
class TimeOfLastCalibration extends AbstractTagGroup
{
    protected string $id = 'DICOM:TimeOfLastCalibration';

    protected string $name = 'TimeOfLastCalibration';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Time Of Last Calibration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69361
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TimeOfLastCalibration',
            'desc' => [
                'en' => 'Time Of Last Calibration',
            ],
        ],
    ];

    protected int $count = 0;
}
