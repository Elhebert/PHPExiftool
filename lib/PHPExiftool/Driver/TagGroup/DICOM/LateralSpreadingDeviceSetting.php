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
class LateralSpreadingDeviceSetting extends AbstractTagGroup
{
    protected string $id = 'DICOM:LateralSpreadingDeviceSetting';

    protected string $name = 'LateralSpreadingDeviceSetting';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Lateral Spreading Device Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76956
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:LateralSpreadingDeviceSetting',
            'desc' => [
                'en' => 'Lateral Spreading Device Setting',
            ],
        ],
    ];

    protected int $count = 0;
}
