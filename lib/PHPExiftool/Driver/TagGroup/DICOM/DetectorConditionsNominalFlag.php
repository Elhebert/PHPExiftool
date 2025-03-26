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
class DetectorConditionsNominalFlag extends AbstractTagGroup
{
    protected string $id = 'DICOM:DetectorConditionsNominalFlag';

    protected string $name = 'DetectorConditionsNominalFlag';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Detector Conditions Nominal Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69796
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DetectorConditionsNominalFlag',
            'desc' => [
                'en' => 'Detector Conditions Nominal Flag',
            ],
        ],
    ];

    protected int $count = 0;
}
