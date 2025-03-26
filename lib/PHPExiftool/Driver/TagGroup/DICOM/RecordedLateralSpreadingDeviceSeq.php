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
class RecordedLateralSpreadingDeviceSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:RecordedLateralSpreadingDeviceSeq';

    protected string $name = 'RecordedLateralSpreadingDeviceSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Recorded Lateral Spreading Device Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75933
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:RecordedLateralSpreadingDeviceSeq',
            'desc' => [
                'en' => 'Recorded Lateral Spreading Device Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
