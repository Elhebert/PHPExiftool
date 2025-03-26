<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorPixelSize extends AbstractTagGroup
{
    protected string $id = 'Nikon:SensorPixelSize';

    protected string $name = 'SensorPixelSize';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sensor Pixel Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 133220
             * type : rational64u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:SensorPixelSize',
            'desc' => [
                'en' => 'Sensor Pixel Size',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
