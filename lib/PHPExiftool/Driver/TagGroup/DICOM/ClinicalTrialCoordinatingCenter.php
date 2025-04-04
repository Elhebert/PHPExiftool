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
class ClinicalTrialCoordinatingCenter extends AbstractTagGroup
{
    protected string $id = 'DICOM:ClinicalTrialCoordinatingCenter';

    protected string $name = 'ClinicalTrialCoordinatingCenter';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Clinical Trial Coordinating Center',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68839
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ClinicalTrialCoordinatingCenter',
            'desc' => [
                'en' => 'Clinical Trial Coordinating Center',
            ],
        ],
    ];

    protected int $count = 0;
}
