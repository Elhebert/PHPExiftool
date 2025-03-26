<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecDeviceSerialNumber extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:RecDeviceSerialNumber';

    protected string $name = 'RecDeviceSerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 409702
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:RecDeviceSerialNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
