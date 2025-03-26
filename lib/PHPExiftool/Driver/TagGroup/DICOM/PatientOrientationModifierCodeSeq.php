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
class PatientOrientationModifierCodeSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:PatientOrientationModifierCodeSeq';

    protected string $name = 'PatientOrientationModifierCodeSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Patient Orientation Modifier Code Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74103
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:PatientOrientationModifierCodeSeq',
            'desc' => [
                'en' => 'Patient Orientation Modifier Code Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
