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
class NominalPercentOfRespiratoryPhase extends AbstractTagGroup
{
    protected string $id = 'DICOM:NominalPercentOfRespiratoryPhase';

    protected string $name = 'NominalPercentOfRespiratoryPhase';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Nominal Percent Of Respiratory Phase',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71461
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:NominalPercentOfRespiratoryPhase',
            'desc' => [
                'en' => 'Nominal Percent Of Respiratory Phase',
            ],
        ],
    ];

    protected int $count = 0;
}
