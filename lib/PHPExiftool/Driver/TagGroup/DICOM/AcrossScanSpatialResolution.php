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
class AcrossScanSpatialResolution extends AbstractTagGroup
{
    protected string $id = 'DICOM:AcrossScanSpatialResolution';

    protected string $name = 'AcrossScanSpatialResolution';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Across Scan Spatial Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71755
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:AcrossScanSpatialResolution',
            'desc' => [
                'en' => 'Across Scan Spatial Resolution',
            ],
        ],
    ];

    protected int $count = 0;
}
