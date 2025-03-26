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
class ObjectPixelSpacingInCenterOfBeam extends AbstractTagGroup
{
    protected string $id = 'DICOM:ObjectPixelSpacingInCenterOfBeam';

    protected string $name = 'ObjectPixelSpacingInCenterOfBeam';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Object Pixel Spacing In Center Of Beam',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70492
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ObjectPixelSpacingInCenterOfBeam',
            'desc' => [
                'en' => 'Object Pixel Spacing In Center Of Beam',
            ],
        ],
    ];

    protected int $count = 0;
}
