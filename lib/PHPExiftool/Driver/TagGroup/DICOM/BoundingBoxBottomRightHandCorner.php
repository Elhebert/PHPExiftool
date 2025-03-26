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
class BoundingBoxBottomRightHandCorner extends AbstractTagGroup
{
    protected string $id = 'DICOM:BoundingBoxBottomRightHandCorner';

    protected string $name = 'BoundingBoxBottomRightHandCorner';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bounding Box Bottom Right Hand Corner',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74409
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:BoundingBoxBottomRightHandCorner',
            'desc' => [
                'en' => 'Bounding Box Bottom Right Hand Corner',
            ],
        ],
    ];

    protected int $count = 0;
}
