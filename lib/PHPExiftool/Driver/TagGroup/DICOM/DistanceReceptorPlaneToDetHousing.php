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
class DistanceReceptorPlaneToDetHousing extends AbstractTagGroup
{
    protected string $id = 'DICOM:DistanceReceptorPlaneToDetHousing';

    protected string $name = 'DistanceReceptorPlaneToDetHousing';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Distance Receptor Plane To Det Housing',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70522
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DistanceReceptorPlaneToDetHousing',
            'desc' => [
                'en' => 'Distance Receptor Plane To Det Housing',
            ],
        ],
    ];

    protected int $count = 0;
}
