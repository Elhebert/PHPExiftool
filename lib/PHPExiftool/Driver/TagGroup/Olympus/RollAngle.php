<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RollAngle extends AbstractTagGroup
{
    protected string $id = 'Olympus:RollAngle';

    protected string $name = 'RollAngle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Roll Angle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 174398
             * type : int16s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:RollAngle',
            'desc' => [
                'en' => 'Roll Angle',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
