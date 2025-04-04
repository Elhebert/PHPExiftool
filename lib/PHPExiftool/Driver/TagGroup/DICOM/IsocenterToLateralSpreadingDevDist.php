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
class IsocenterToLateralSpreadingDevDist extends AbstractTagGroup
{
    protected string $id = 'DICOM:IsocenterToLateralSpreadingDevDist';

    protected string $name = 'IsocenterToLateralSpreadingDevDist';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Isocenter To Lateral Spreading Dev Dist',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76959
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IsocenterToLateralSpreadingDevDist',
            'desc' => [
                'en' => 'Isocenter To Lateral Spreading Dev Dist',
            ],
        ],
    ];

    protected int $count = 0;
}
