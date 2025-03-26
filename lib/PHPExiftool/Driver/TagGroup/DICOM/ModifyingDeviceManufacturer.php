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
class ModifyingDeviceManufacturer extends AbstractTagGroup
{
    protected string $id = 'DICOM:ModifyingDeviceManufacturer';

    protected string $name = 'ModifyingDeviceManufacturer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Modifying Device Manufacturer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71371
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ModifyingDeviceManufacturer',
            'desc' => [
                'en' => 'Modifying Device Manufacturer',
            ],
        ],
    ];

    protected int $count = 0;
}
