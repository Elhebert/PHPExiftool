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
class PositionerIsocenterDetRotAngle extends AbstractTagGroup
{
    protected string $id = 'DICOM:PositionerIsocenterDetRotAngle';

    protected string $name = 'PositionerIsocenterDetRotAngle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Positioner Isocenter Det Rot Angle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70594
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:PositionerIsocenterDetRotAngle',
            'desc' => [
                'en' => 'Positioner Isocenter Det Rot Angle',
            ],
        ],
    ];

    protected int $count = 0;
}
