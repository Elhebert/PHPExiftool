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
class CameraYaw extends AbstractTagGroup
{
    protected string $id = 'DJI:CameraYaw';

    protected string $name = 'CameraYaw';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Yaw',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DJI::Main
             * line : 77582
             * type : float
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'DJI::Main.DJI:CameraYaw',
            'desc' => [
                'en' => 'Camera Yaw',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
