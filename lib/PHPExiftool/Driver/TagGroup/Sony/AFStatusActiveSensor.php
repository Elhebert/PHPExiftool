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
class AFStatusActiveSensor extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusActiveSensor';

    protected string $name = 'AFStatusActiveSensor';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Active Sensor',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 238385
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFStatusActiveSensor',
            'desc' => [
                'en' => 'AF Status Active Sensor',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 240029
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFStatusActiveSensor',
            'desc' => [
                'en' => 'AF Status Active Sensor',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 242046
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFStatusActiveSensor',
            'desc' => [
                'en' => 'AF Status Active Sensor',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraInfo2
             * line : 242418
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo2.Sony:AFStatusActiveSensor',
            'desc' => [
                'en' => 'AF Status Active Sensor',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242664
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFStatusActiveSensor',
            'desc' => [
                'en' => 'AF Status Active Sensor',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242829
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFStatusActiveSensor',
            'desc' => [
                'en' => 'AF Status Active Sensor',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
