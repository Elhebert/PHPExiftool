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
class ChemicalShiftsMinIntegrateLimitPPM extends AbstractTagGroup
{
    protected string $id = 'DICOM:ChemicalShiftsMinIntegrateLimitPPM';

    protected string $name = 'ChemicalShiftsMinIntegrateLimitPPM';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Chemical Shifts Min Integrate Limit PPM',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70336
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ChemicalShiftsMinIntegrateLimitPPM',
            'desc' => [
                'en' => 'Chemical Shifts Min Integrate Limit PPM',
            ],
        ],
    ];

    protected int $count = 0;
}
