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
class TableTopLateralPositionTolerance extends AbstractTagGroup
{
    protected string $id = 'DICOM:TableTopLateralPositionTolerance';

    protected string $name = 'TableTopLateralPositionTolerance';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Table Top Lateral Position Tolerance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76164
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TableTopLateralPositionTolerance',
            'desc' => [
                'en' => 'Table Top Lateral Position Tolerance',
            ],
        ],
    ];

    protected int $count = 0;
}
