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
class FlashExposureIndicator extends AbstractTagGroup
{
    protected string $id = 'Minolta:FlashExposureIndicator';

    protected string $name = 'FlashExposureIndicator';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Exposure Indicator',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123920
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:FlashExposureIndicator',
            'desc' => [
                'en' => 'Flash Exposure Indicator',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
