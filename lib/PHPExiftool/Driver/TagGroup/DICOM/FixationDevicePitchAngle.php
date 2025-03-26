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
class FixationDevicePitchAngle extends AbstractTagGroup
{
    protected string $id = 'DICOM:FixationDevicePitchAngle';

    protected string $name = 'FixationDevicePitchAngle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fixation Device Pitch Angle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76563
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FixationDevicePitchAngle',
            'desc' => [
                'en' => 'Fixation Device Pitch Angle',
            ],
        ],
    ];

    protected int $count = 0;
}
