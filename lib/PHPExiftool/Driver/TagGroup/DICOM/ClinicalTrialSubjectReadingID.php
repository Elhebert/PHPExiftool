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
class ClinicalTrialSubjectReadingID extends AbstractTagGroup
{
    protected string $id = 'DICOM:ClinicalTrialSubjectReadingID';

    protected string $name = 'ClinicalTrialSubjectReadingID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Clinical Trial Subject Reading ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68830
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ClinicalTrialSubjectReadingID',
            'desc' => [
                'en' => 'Clinical Trial Subject Reading ID',
            ],
        ],
    ];

    protected int $count = 0;
}
