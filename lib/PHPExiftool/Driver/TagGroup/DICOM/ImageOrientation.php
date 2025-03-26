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
class ImageOrientation extends AbstractTagGroup
{
    protected string $id = 'DICOM:ImageOrientation';

    protected string $name = 'ImageOrientation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71275
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ImageOrientation',
            'desc' => [
                'en' => 'Image Orientation',
            ],
        ],
        1 => [
            /**
             * table_name : DICOM::Main
             * line : 71575
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ImageOrientation',
            'desc' => [
                'en' => 'Image Orientation',
            ],
        ],
    ];

    protected int $count = 0;
}
