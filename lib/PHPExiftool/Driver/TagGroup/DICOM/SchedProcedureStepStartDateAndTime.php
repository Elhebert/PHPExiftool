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
class SchedProcedureStepStartDateAndTime extends AbstractTagGroup
{
    protected string $id = 'DICOM:SchedProcedureStepStartDateAndTime';

    protected string $name = 'SchedProcedureStepStartDateAndTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sched Procedure Step Start Date And Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73137
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SchedProcedureStepStartDateAndTime',
            'desc' => [
                'en' => 'Sched Procedure Step Start Date And Time',
            ],
        ],
    ];

    protected int $count = 0;
}
