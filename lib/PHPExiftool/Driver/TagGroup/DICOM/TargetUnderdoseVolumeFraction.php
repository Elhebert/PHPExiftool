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
class TargetUnderdoseVolumeFraction extends AbstractTagGroup
{
    protected string $id = 'DICOM:TargetUnderdoseVolumeFraction';

    protected string $name = 'TargetUnderdoseVolumeFraction';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Target Underdose Volume Fraction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76107
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TargetUnderdoseVolumeFraction',
            'desc' => [
                'en' => 'Target Underdose Volume Fraction',
            ],
        ],
    ];

    protected int $count = 0;
}
