<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorLeftBorder extends AbstractTagGroup
{
    protected string $id = 'Canon:SensorLeftBorder';

    protected string $name = 'SensorLeftBorder';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sensor Left Border',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::SensorInfo
             * line : 52604
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::SensorInfo.Canon:SensorLeftBorder',
            'desc' => [
                'en' => 'Sensor Left Border',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
