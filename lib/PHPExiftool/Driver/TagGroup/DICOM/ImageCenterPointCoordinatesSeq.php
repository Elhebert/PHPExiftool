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
class ImageCenterPointCoordinatesSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:ImageCenterPointCoordinatesSeq';

    protected string $name = 'ImageCenterPointCoordinatesSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Center Point Coordinates Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73017
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ImageCenterPointCoordinatesSeq',
            'desc' => [
                'en' => 'Image Center Point Coordinates Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
