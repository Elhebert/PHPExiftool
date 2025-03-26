<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashExposureCompSet extends AbstractTagGroup
{
    protected string $id = 'Sony:FlashExposureCompSet';

    protected string $name = 'FlashExposureCompSet';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Exposure Comp. Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243190
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FlashExposureCompSet',
            'desc' => [
                'en' => 'Flash Exposure Comp. Setting',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243897
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:FlashExposureCompSet',
            'desc' => [
                'en' => 'Flash Exposure Comp. Setting',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244843
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FlashExposureCompSet',
            'desc' => [
                'en' => 'Flash Exposure Comp. Setting',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251434
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FlashExposureCompSet',
            'desc' => [
                'en' => 'Flash Exposure Comp. Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
