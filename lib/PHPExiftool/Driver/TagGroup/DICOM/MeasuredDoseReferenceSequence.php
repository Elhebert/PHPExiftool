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
class MeasuredDoseReferenceSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:MeasuredDoseReferenceSequence';

    protected string $name = 'MeasuredDoseReferenceSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Measured Dose Reference Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75759
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:MeasuredDoseReferenceSequence',
            'desc' => [
                'en' => 'Measured Dose Reference Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
