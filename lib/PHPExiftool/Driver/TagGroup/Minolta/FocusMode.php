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
class FocusMode extends AbstractTagGroup
{
    protected string $id = 'Minolta:FocusMode';

    protected string $name = 'FocusMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 122207
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122689
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123030
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
