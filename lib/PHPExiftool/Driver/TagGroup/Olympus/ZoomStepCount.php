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
class ZoomStepCount extends AbstractTagGroup
{
    protected string $id = 'Olympus:ZoomStepCount';

    protected string $name = 'ZoomStepCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Zoom Step Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 175887
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::FocusInfo.Olympus:ZoomStepCount',
            'desc' => [
                'en' => 'Zoom Step Count',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178598
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:ZoomStepCount',
            'desc' => [
                'en' => 'Zoom Step Count',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
