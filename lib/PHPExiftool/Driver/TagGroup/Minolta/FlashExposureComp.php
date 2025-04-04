<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashExposureComp extends AbstractTagGroup
{
    protected string $id = 'Minolta:FlashExposureComp';

    protected string $name = 'FlashExposureComp';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Exposure Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 122064
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:FlashExposureComp',
            'desc' => [
                'en' => 'Flash Exposure Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::Main
             * line : 124590
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:FlashExposureComp',
            'desc' => [
                'en' => 'Flash Exposure Compensation',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 126845
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:FlashExposureComp',
            'desc' => [
                'en' => 'Flash Exposure Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
