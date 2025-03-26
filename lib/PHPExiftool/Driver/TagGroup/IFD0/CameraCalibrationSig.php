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
class CameraCalibrationSig extends AbstractTagGroup
{
    protected string $id = 'IFD0:CameraCalibrationSig';

    protected string $name = 'CameraCalibrationSig';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Calibration Sig',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84414
             * type : string
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:CameraCalibrationSig',
            'desc' => [
                'en' => 'Camera Calibration Sig',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
