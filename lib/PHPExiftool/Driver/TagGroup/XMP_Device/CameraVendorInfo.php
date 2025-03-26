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
class CameraVendorInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-Device:CameraVendorInfo';

    protected string $name = 'CameraVendorInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Vendor Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Device
             * line : 280874
             * type : struct
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::Device.XMP-Device:CameraVendorInfo',
            'desc' => [
                'en' => 'Camera Vendor Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
