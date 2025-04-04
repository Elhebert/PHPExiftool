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
class ROIElementalCompAtomicMassFraction extends AbstractTagGroup
{
    protected string $id = 'DICOM:ROIElementalCompAtomicMassFraction';

    protected string $name = 'ROIElementalCompAtomicMassFraction';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ROI Elemental Comp Atomic Mass Fraction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75741
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ROIElementalCompAtomicMassFraction',
            'desc' => [
                'en' => 'ROI Elemental Comp Atomic Mass Fraction',
            ],
        ],
    ];

    protected int $count = 0;
}
