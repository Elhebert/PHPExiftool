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
class SpecimenDescriptionSequenceTrial extends AbstractTagGroup
{
    protected string $id = 'DICOM:SpecimenDescriptionSequenceTrial';

    protected string $name = 'SpecimenDescriptionSequenceTrial';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Specimen Description Sequence Trial',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72993
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SpecimenDescriptionSequenceTrial',
            'desc' => [
                'en' => 'Specimen Description Sequence Trial',
            ],
        ],
    ];

    protected int $count = 0;
}
