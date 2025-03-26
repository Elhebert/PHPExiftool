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
class HardcopyDeviceManufacturer extends AbstractTagGroup
{
    protected string $id = 'DICOM:HardcopyDeviceManufacturer';

    protected string $name = 'HardcopyDeviceManufacturer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Hardcopy Device Manufacturer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69058
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:HardcopyDeviceManufacturer',
            'desc' => [
                'en' => 'Hardcopy Device Manufacturer',
            ],
        ],
    ];

    protected int $count = 0;
}
