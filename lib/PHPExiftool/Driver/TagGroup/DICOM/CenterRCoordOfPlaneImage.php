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
class CenterRCoordOfPlaneImage extends AbstractTagGroup
{
    protected string $id = 'DICOM:CenterRCoordOfPlaneImage';

    protected string $name = 'CenterRCoordOfPlaneImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Center R Coord Of Plane Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71869
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:CenterRCoordOfPlaneImage',
            'desc' => [
                'en' => 'Center R Coord Of Plane Image',
            ],
        ],
    ];

    protected int $count = 0;
}
