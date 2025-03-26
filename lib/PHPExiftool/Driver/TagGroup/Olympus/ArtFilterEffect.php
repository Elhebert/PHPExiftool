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
class ArtFilterEffect extends AbstractTagGroup
{
    protected string $id = 'Olympus:ArtFilterEffect';

    protected string $name = 'ArtFilterEffect';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Art Filter Effect',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 174039
             * type : int16u
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:ArtFilterEffect',
            'desc' => [
                'en' => 'Art Filter Effect',
            ],
        ],
    ];

    protected int $count = 20;

    protected int $flags = 2052;
}
