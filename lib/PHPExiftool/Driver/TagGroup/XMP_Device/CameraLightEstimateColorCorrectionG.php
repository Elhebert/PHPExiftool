<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_Device;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraLightEstimateColorCorrectionG extends AbstractTagGroup
{
    protected string $id = 'XMP-Device:CameraLightEstimateColorCorrectionG';

    protected string $name = 'CameraLightEstimateColorCorrectionG';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Light Estimate Color Correction G',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Device
             * line : 280823
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::Device.XMP-Device:CameraLightEstimateColorCorrectionG',
            'desc' => [
                'en' => 'Camera Light Estimate Color Correction G',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
