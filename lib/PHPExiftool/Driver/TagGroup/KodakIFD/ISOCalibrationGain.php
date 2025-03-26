<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISOCalibrationGain extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ISOCalibrationGain';

    protected string $name = 'ISOCalibrationGain';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO Calibration Gain',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106505
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ISOCalibrationGain',
            'desc' => [
                'en' => 'ISO Calibration Gain',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
