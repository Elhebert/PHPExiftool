<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CalibrationIlluminant1 extends AbstractTagGroup
{
    protected string $id = 'IFD0:CalibrationIlluminant1';

    protected string $name = 'CalibrationIlluminant1';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Calibration Illuminant 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84227
             * type : int16u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:CalibrationIlluminant1',
            'desc' => [
                'en' => 'Calibration Illuminant 1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
