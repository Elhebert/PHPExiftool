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
class FillerOrderNum_ImagingServiceReq extends AbstractTagGroup
{
    protected string $id = 'DICOM:FillerOrderNum-ImagingServiceReq';

    protected string $name = 'FillerOrderNum-ImagingServiceReq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 99899
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FillerOrderNum-ImagingServiceReq',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : DICOM::Main
             * line : 99914
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FillerOrderNum-ImagingServiceReq',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
