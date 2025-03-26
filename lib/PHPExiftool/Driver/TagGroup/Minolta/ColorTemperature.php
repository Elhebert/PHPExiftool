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
class ColorTemperature extends AbstractTagGroup
{
    protected string $id = 'Minolta:ColorTemperature';

    protected string $name = 'ColorTemperature';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temperature',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122493
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122533
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122821
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123454
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        4 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 124194
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        5 => [
            /**
             * table_name : Minolta::Main
             * line : 124661
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
