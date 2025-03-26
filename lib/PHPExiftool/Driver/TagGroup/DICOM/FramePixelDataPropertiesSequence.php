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
class FramePixelDataPropertiesSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:FramePixelDataPropertiesSequence';

    protected string $name = 'FramePixelDataPropertiesSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Frame Pixel Data Properties Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72429
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FramePixelDataPropertiesSequence',
            'desc' => [
                'en' => 'Frame Pixel Data Properties Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
