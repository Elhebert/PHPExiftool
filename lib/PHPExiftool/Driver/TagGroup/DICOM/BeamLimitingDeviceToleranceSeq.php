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
class BeamLimitingDeviceToleranceSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:BeamLimitingDeviceToleranceSeq';

    protected string $name = 'BeamLimitingDeviceToleranceSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Beam Limiting Device Tolerance Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76137
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:BeamLimitingDeviceToleranceSeq',
            'desc' => [
                'en' => 'Beam Limiting Device Tolerance Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
