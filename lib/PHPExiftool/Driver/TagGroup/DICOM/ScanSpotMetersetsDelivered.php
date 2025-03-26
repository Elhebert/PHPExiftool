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
class ScanSpotMetersetsDelivered extends AbstractTagGroup
{
    protected string $id = 'DICOM:ScanSpotMetersetsDelivered';

    protected string $name = 'ScanSpotMetersetsDelivered';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Scan Spot Metersets Delivered',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75834
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ScanSpotMetersetsDelivered',
            'desc' => [
                'en' => 'Scan Spot Metersets Delivered',
            ],
        ],
    ];

    protected int $count = 0;
}
