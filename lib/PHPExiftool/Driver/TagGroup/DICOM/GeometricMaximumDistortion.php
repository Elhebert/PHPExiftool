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
class GeometricMaximumDistortion extends AbstractTagGroup
{
    protected string $id = 'DICOM:GeometricMaximumDistortion';

    protected string $name = 'GeometricMaximumDistortion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Geometric Maximum Distortion',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72435
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:GeometricMaximumDistortion',
            'desc' => [
                'en' => 'Geometric Maximum Distortion',
            ],
        ],
    ];

    protected int $count = 0;
}
