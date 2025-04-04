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
class CameraVendorInfoNotes extends AbstractTagGroup
{
    protected string $id = 'XMP-Device:CameraVendorInfoNotes';

    protected string $name = 'CameraVendorInfoNotes';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Vendor Info Notes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Device
             * line : 280883
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::Device.XMP-Device:CameraVendorInfoNotes',
            'desc' => [
                'en' => 'Camera Vendor Info Notes',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
