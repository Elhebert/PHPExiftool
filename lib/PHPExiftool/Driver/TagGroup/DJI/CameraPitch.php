<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraPitch extends AbstractTagGroup
{
    protected string $id = 'DJI:CameraPitch';

    protected string $name = 'CameraPitch';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Pitch',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DJI::Main
             * line : 77579
             * type : float
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'DJI::Main.DJI:CameraPitch',
            'desc' => [
                'en' => 'Camera Pitch',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
