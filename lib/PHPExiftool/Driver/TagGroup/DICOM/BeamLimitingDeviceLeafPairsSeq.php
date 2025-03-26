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
class BeamLimitingDeviceLeafPairsSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:BeamLimitingDeviceLeafPairsSeq';

    protected string $name = 'BeamLimitingDeviceLeafPairsSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Beam Limiting Device Leaf Pairs Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75912
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:BeamLimitingDeviceLeafPairsSeq',
            'desc' => [
                'en' => 'Beam Limiting Device Leaf Pairs Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
