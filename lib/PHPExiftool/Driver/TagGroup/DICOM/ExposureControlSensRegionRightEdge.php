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
class ExposureControlSensRegionRightEdge extends AbstractTagGroup
{
    protected string $id = 'DICOM:ExposureControlSensRegionRightEdge';

    protected string $name = 'ExposureControlSensRegionRightEdge';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Exposure Control Sens Region Right Edge',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70552
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ExposureControlSensRegionRightEdge',
            'desc' => [
                'en' => 'Exposure Control Sens Region Right Edge',
            ],
        ],
    ];

    protected int $count = 0;
}
