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
class SecondaryCaptureDeviceManufacturer extends AbstractTagGroup
{
    protected string $id = 'DICOM:SecondaryCaptureDeviceManufacturer';

    protected string $name = 'SecondaryCaptureDeviceManufacturer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Secondary Capture Device Manufacturer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69055
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SecondaryCaptureDeviceManufacturer',
            'desc' => [
                'en' => 'Secondary Capture Device Manufacturer',
            ],
        ],
    ];

    protected int $count = 0;
}
