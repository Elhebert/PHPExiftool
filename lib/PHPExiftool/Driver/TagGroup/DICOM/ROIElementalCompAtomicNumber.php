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
class ROIElementalCompAtomicNumber extends AbstractTagGroup
{
    protected string $id = 'DICOM:ROIElementalCompAtomicNumber';

    protected string $name = 'ROIElementalCompAtomicNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ROI Elemental Comp Atomic Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75738
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ROIElementalCompAtomicNumber',
            'desc' => [
                'en' => 'ROI Elemental Comp Atomic Number',
            ],
        ],
    ];

    protected int $count = 0;
}
