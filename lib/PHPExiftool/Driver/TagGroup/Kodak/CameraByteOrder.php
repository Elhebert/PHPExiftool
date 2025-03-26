<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraByteOrder extends AbstractTagGroup
{
    protected string $id = 'Kodak:CameraByteOrder';

    protected string $name = 'CameraByteOrder';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::DcMD
             * line : 154456
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::DcMD.Kodak:CameraByteOrder',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::DcMD
             * line : 154469
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::DcMD.Kodak:CameraByteOrder',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
