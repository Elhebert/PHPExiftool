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
class PatientEyeMovementCommandCodeSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:PatientEyeMovementCommandCodeSeq';

    protected string $name = 'PatientEyeMovementCommandCodeSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Patient Eye Movement Command Code Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71647
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:PatientEyeMovementCommandCodeSeq',
            'desc' => [
                'en' => 'Patient Eye Movement Command Code Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
