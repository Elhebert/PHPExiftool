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
class RespiratoryTriggerDelayThreshold extends AbstractTagGroup
{
    protected string $id = 'DICOM:RespiratoryTriggerDelayThreshold';

    protected string $name = 'RespiratoryTriggerDelayThreshold';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Respiratory Trigger Delay Threshold',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71494
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:RespiratoryTriggerDelayThreshold',
            'desc' => [
                'en' => 'Respiratory Trigger Delay Threshold',
            ],
        ],
    ];

    protected int $count = 0;
}
