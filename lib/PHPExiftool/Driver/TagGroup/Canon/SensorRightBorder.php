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
class SensorRightBorder extends AbstractTagGroup
{
    protected string $id = 'Canon:SensorRightBorder';

    protected string $name = 'SensorRightBorder';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sensor Right Border',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::SensorInfo
             * line : 52610
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::SensorInfo.Canon:SensorRightBorder',
            'desc' => [
                'en' => 'Sensor Right Border',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
