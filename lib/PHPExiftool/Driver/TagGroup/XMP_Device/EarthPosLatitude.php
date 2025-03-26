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
class EarthPosLatitude extends AbstractTagGroup
{
    protected string $id = 'XMP-Device:EarthPosLatitude';

    protected string $name = 'EarthPosLatitude';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Earth Pos Latitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Device
             * line : 280913
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::Device.XMP-Device:EarthPosLatitude',
            'desc' => [
                'en' => 'Earth Pos Latitude',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
