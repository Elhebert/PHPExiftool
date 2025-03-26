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
class BoundingBoxTextHorizJustification extends AbstractTagGroup
{
    protected string $id = 'DICOM:BoundingBoxTextHorizJustification';

    protected string $name = 'BoundingBoxTextHorizJustification';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bounding Box Text Horiz Justification',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74412
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:BoundingBoxTextHorizJustification',
            'desc' => [
                'en' => 'Bounding Box Text Horiz Justification',
            ],
        ],
    ];

    protected int $count = 0;
}
