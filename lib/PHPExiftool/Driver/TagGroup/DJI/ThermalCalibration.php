<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThermalCalibration extends AbstractTagGroup
{
    protected string $id = 'DJI:ThermalCalibration';

    protected string $name = 'ThermalCalibration';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thermal Calibration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::Main
             * line : 105038
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'JPEG::Main.DJI:ThermalCalibration',
            'desc' => [
                'en' => 'Thermal Calibration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
