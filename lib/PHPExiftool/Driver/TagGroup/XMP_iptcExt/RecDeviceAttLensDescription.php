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
class RecDeviceAttLensDescription extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:RecDeviceAttLensDescription';

    protected string $name = 'RecDeviceAttLensDescription';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rec Device Att Lens Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289450
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:RecDeviceAttLensDescription',
            'desc' => [
                'en' => 'Rec Device Att Lens Description',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
