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
class ReferencedDoseReferenceNumber extends AbstractTagGroup
{
    protected string $id = 'DICOM:ReferencedDoseReferenceNumber';

    protected string $name = 'ReferencedDoseReferenceNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Referenced Dose Reference Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 77082
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ReferencedDoseReferenceNumber',
            'desc' => [
                'en' => 'Referenced Dose Reference Number',
            ],
        ],
    ];

    protected int $count = 0;
}
