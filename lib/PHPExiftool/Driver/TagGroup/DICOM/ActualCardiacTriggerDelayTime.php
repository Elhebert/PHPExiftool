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
class ActualCardiacTriggerDelayTime extends AbstractTagGroup
{
    protected string $id = 'DICOM:ActualCardiacTriggerDelayTime';

    protected string $name = 'ActualCardiacTriggerDelayTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Actual Cardiac Trigger Delay Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71482
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ActualCardiacTriggerDelayTime',
            'desc' => [
                'en' => 'Actual Cardiac Trigger Delay Time',
            ],
        ],
    ];

    protected int $count = 0;
}
