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
class HighSpeedSync extends AbstractTagGroup
{
    protected string $id = 'Minolta:HighSpeedSync';

    protected string $name = 'HighSpeedSync';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'High Speed Sync',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 122940
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:HighSpeedSync',
            'desc' => [
                'en' => 'High Speed Sync',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
