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
class IsocenterToCompensatorTrayDistance extends AbstractTagGroup
{
    protected string $id = 'DICOM:IsocenterToCompensatorTrayDistance';

    protected string $name = 'IsocenterToCompensatorTrayDistance';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Isocenter To Compensator Tray Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76818
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IsocenterToCompensatorTrayDistance',
            'desc' => [
                'en' => 'Isocenter To Compensator Tray Distance',
            ],
        ],
    ];

    protected int $count = 0;
}
