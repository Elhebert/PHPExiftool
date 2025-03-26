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
class ChemicalShiftsMaxIntegrateLimitHz extends AbstractTagGroup
{
    protected string $id = 'DICOM:ChemicalShiftsMaxIntegrateLimitHz';

    protected string $name = 'ChemicalShiftsMaxIntegrateLimitHz';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Chemical Shifts Max Integrate Limit Hz',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70279
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ChemicalShiftsMaxIntegrateLimitHz',
            'desc' => [
                'en' => 'Chemical Shifts Max Integrate Limit Hz',
            ],
        ],
    ];

    protected int $count = 0;
}
