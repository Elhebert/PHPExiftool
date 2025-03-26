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
class ImagingDeviceSpecificAcqParams extends AbstractTagGroup
{
    protected string $id = 'DICOM:ImagingDeviceSpecificAcqParams';

    protected string $name = 'ImagingDeviceSpecificAcqParams';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Imaging Device Specific Acq Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76275
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ImagingDeviceSpecificAcqParams',
            'desc' => [
                'en' => 'Imaging Device Specific Acq Params',
            ],
        ],
    ];

    protected int $count = 0;
}
