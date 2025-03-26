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
class ScheduledPatientInstitResidence extends AbstractTagGroup
{
    protected string $id = 'DICOM:ScheduledPatientInstitResidence';

    protected string $name = 'ScheduledPatientInstitResidence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Scheduled Patient Instit Residence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72624
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ScheduledPatientInstitResidence',
            'desc' => [
                'en' => 'Scheduled Patient Instit Residence',
            ],
        ],
    ];

    protected int $count = 0;
}
