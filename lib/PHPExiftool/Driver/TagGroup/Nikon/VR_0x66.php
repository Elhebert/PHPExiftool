<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VR_0x66 extends AbstractTagGroup
{
    protected string $id = 'Nikon:VR_0x66';

    protected string $name = 'VR_0x66';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'VR 0x66',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 138002
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::ShotInfo.Nikon:VR_0x66',
            'desc' => [
                'en' => 'VR 0x66',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
