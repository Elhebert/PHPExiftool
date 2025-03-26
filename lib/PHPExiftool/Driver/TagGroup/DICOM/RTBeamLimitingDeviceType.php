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
class RTBeamLimitingDeviceType extends AbstractTagGroup
{
    protected string $id = 'DICOM:RTBeamLimitingDeviceType';

    protected string $name = 'RTBeamLimitingDeviceType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'RT Beam Limiting Device Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76236
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:RTBeamLimitingDeviceType',
            'desc' => [
                'en' => 'RT Beam Limiting Device Type',
            ],
        ],
    ];

    protected int $count = 0;
}
