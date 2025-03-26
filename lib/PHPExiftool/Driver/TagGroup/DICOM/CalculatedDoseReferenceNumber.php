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
class CalculatedDoseReferenceNumber extends AbstractTagGroup
{
    protected string $id = 'DICOM:CalculatedDoseReferenceNumber';

    protected string $name = 'CalculatedDoseReferenceNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Calculated Dose Reference Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75885
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:CalculatedDoseReferenceNumber',
            'desc' => [
                'en' => 'Calculated Dose Reference Number',
            ],
        ],
    ];

    protected int $count = 0;
}
