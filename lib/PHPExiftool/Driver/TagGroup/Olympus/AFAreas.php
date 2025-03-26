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
class AFAreas extends AbstractTagGroup
{
    protected string $id = 'Olympus:AFAreas';

    protected string $name = 'AFAreas';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 250784
             * type : int32u
             * writable : false
             * count : 64
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:AFAreas',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 64;

    protected int $flags = 4;
}
