<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorID extends AbstractTagGroup
{
    protected string $id = 'DJI:SensorID';

    protected string $name = 'SensorID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sensor ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DJI::Info
             * line : 77548
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'DJI::Info.DJI:SensorID',
            'desc' => [
                'en' => 'Sensor ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
