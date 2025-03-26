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
class Cameras extends AbstractTagGroup
{
    protected string $id = 'XMP-Device:Cameras';

    protected string $name = 'Cameras';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Device
             * line : 396504
             * type : struct
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::Device.XMP-Device:Cameras',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
