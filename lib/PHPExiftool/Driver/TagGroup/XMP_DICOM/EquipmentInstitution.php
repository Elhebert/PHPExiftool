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
class EquipmentInstitution extends AbstractTagGroup
{
    protected string $id = 'XMP-DICOM:EquipmentInstitution';

    protected string $name = 'EquipmentInstitution';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Equipment Institution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::DICOM
             * line : 280663
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::DICOM.XMP-DICOM:EquipmentInstitution',
            'desc' => [
                'en' => 'Equipment Institution',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
