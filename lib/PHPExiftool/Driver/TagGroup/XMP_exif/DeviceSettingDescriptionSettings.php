<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeviceSettingDescriptionSettings extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:DeviceSettingDescriptionSettings';

    protected string $name = 'DeviceSettingDescriptionSettings';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Device Setting Description Settings',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 287897
             * type : string
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::exif.XMP-exif:DeviceSettingDescriptionSettings',
            'desc' => [
                'en' => 'Device Setting Description Settings',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
