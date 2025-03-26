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
class VendorInfoManufacturer extends AbstractTagGroup
{
    protected string $id = 'XMP-Device:VendorInfoManufacturer';

    protected string $name = 'VendorInfoManufacturer';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Vendor Info Manufacturer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Device
             * line : 281021
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::Device.XMP-Device:VendorInfoManufacturer',
            'desc' => [
                'en' => 'Vendor Info Manufacturer',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
