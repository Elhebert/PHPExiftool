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
class SharpnessSetting extends AbstractTagGroup
{
    protected string $id = 'Olympus:SharpnessSetting';

    protected string $name = 'SharpnessSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sharpness Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 173277
             * type : int16s
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:SharpnessSetting',
            'desc' => [
                'en' => 'Sharpness Setting',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::RawInfo
             * line : 180305
             * type : int16s
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Olympus::RawInfo.Olympus:SharpnessSetting',
            'desc' => [
                'en' => 'Sharpness Setting',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
