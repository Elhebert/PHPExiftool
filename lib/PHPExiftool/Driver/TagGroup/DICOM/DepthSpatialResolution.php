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
class DepthSpatialResolution extends AbstractTagGroup
{
    protected string $id = 'DICOM:DepthSpatialResolution';

    protected string $name = 'DepthSpatialResolution';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Depth Spatial Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71734
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DepthSpatialResolution',
            'desc' => [
                'en' => 'Depth Spatial Resolution',
            ],
        ],
    ];

    protected int $count = 0;
}
