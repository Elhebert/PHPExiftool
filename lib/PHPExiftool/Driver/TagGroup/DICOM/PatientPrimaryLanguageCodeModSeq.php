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
class PatientPrimaryLanguageCodeModSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:PatientPrimaryLanguageCodeModSeq';

    protected string $name = 'PatientPrimaryLanguageCodeModSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Patient Primary Language Code Mod Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68689
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:PatientPrimaryLanguageCodeModSeq',
            'desc' => [
                'en' => 'Patient Primary Language Code Mod Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
