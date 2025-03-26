<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EquipmentManufacturer extends AbstractTagGroup
{
    protected string $id = 'XMP-DICOM:EquipmentManufacturer';

    protected string $name = 'EquipmentManufacturer';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::DICOM
             * line : 396436
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::DICOM.XMP-DICOM:EquipmentManufacturer',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
