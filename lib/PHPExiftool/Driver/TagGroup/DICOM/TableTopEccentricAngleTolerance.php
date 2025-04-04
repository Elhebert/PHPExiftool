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
class TableTopEccentricAngleTolerance extends AbstractTagGroup
{
    protected string $id = 'DICOM:TableTopEccentricAngleTolerance';

    protected string $name = 'TableTopEccentricAngleTolerance';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Table Top Eccentric Angle Tolerance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76149
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TableTopEccentricAngleTolerance',
            'desc' => [
                'en' => 'Table Top Eccentric Angle Tolerance',
            ],
        ],
    ];

    protected int $count = 0;
}
