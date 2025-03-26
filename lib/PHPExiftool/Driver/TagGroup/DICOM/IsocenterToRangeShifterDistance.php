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
class IsocenterToRangeShifterDistance extends AbstractTagGroup
{
    protected string $id = 'DICOM:IsocenterToRangeShifterDistance';

    protected string $name = 'IsocenterToRangeShifterDistance';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Isocenter To Range Shifter Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76947
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IsocenterToRangeShifterDistance',
            'desc' => [
                'en' => 'Isocenter To Range Shifter Distance',
            ],
        ],
    ];

    protected int $count = 0;
}
