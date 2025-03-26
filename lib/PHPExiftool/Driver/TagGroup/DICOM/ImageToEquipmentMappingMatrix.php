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
class ImageToEquipmentMappingMatrix extends AbstractTagGroup
{
    protected string $id = 'DICOM:ImageToEquipmentMappingMatrix';

    protected string $name = 'ImageToEquipmentMappingMatrix';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image To Equipment Mapping Matrix',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72465
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ImageToEquipmentMappingMatrix',
            'desc' => [
                'en' => 'Image To Equipment Mapping Matrix',
            ],
        ],
    ];

    protected int $count = 0;
}
