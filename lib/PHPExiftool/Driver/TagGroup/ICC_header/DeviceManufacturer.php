<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_header;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeviceManufacturer extends AbstractTagGroup
{
    protected string $id = 'ICC-header:DeviceManufacturer';

    protected string $name = 'DeviceManufacturer';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Header
             * line : 144200
             * type : string
             * writable : false
             * count : 4
             * flags :
             */
            'id' => 'ICC_Profile::Header.ICC-header:DeviceManufacturer',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;
}
