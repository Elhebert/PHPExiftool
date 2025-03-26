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
class ReferencedOverlayPlaneGroups extends AbstractTagGroup
{
    protected string $id = 'DICOM:ReferencedOverlayPlaneGroups';

    protected string $name = 'ReferencedOverlayPlaneGroups';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Referenced Overlay Plane Groups',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75303
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ReferencedOverlayPlaneGroups',
            'desc' => [
                'en' => 'Referenced Overlay Plane Groups',
            ],
        ],
    ];

    protected int $count = 0;
}
