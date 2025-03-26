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
class FlashExposureComp extends AbstractTagGroup
{
    protected string $id = 'Olympus:FlashExposureComp';

    protected string $name = 'FlashExposureComp';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Exposure Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 173085
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:FlashExposureComp',
            'desc' => [
                'en' => 'Flash Exposure Comp',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178710
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:FlashExposureComp',
            'desc' => [
                'en' => 'Flash Exposure Comp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
