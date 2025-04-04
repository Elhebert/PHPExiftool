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
class ExtendedWBDetect extends AbstractTagGroup
{
    protected string $id = 'Olympus:ExtendedWBDetect';

    protected string $name = 'ExtendedWBDetect';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Extended WB Detect',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 174387
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:ExtendedWBDetect',
            'desc' => [
                'en' => 'Extended WB Detect',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
