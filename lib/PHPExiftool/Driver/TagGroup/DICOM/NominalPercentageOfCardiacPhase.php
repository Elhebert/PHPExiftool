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
class NominalPercentageOfCardiacPhase extends AbstractTagGroup
{
    protected string $id = 'DICOM:NominalPercentageOfCardiacPhase';

    protected string $name = 'NominalPercentageOfCardiacPhase';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Nominal Percentage Of Cardiac Phase',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71458
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:NominalPercentageOfCardiacPhase',
            'desc' => [
                'en' => 'Nominal Percentage Of Cardiac Phase',
            ],
        ],
    ];

    protected int $count = 0;
}
