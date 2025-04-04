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
class TreatmentSessionAppSetupSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:TreatmentSessionAppSetupSeq';

    protected string $name = 'TreatmentSessionAppSetupSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Treatment Session App Setup Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75945
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TreatmentSessionAppSetupSeq',
            'desc' => [
                'en' => 'Treatment Session App Setup Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
