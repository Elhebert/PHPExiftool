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
class ScheduledProcedureStepStatus extends AbstractTagGroup
{
    protected string $id = 'DICOM:ScheduledProcedureStepStatus';

    protected string $name = 'ScheduledProcedureStepStatus';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Scheduled Procedure Step Status',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72831
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ScheduledProcedureStepStatus',
            'desc' => [
                'en' => 'Scheduled Procedure Step Status',
            ],
        ],
    ];

    protected int $count = 0;
}
