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
class CameraPointCloudPoints extends AbstractTagGroup
{
    protected string $id = 'XMP-Device:CameraPointCloudPoints';

    protected string $name = 'CameraPointCloudPoints';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Point Cloud Points',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Device
             * line : 280841
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::Device.XMP-Device:CameraPointCloudPoints',
            'desc' => [
                'en' => 'Camera Point Cloud Points',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
