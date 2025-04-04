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
class ClinicalTrialSeriesID extends AbstractTagGroup
{
    protected string $id = 'DICOM:ClinicalTrialSeriesID';

    protected string $name = 'ClinicalTrialSeriesID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Clinical Trial Series ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68851
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ClinicalTrialSeriesID',
            'desc' => [
                'en' => 'Clinical Trial Series ID',
            ],
        ],
    ];

    protected int $count = 0;
}
