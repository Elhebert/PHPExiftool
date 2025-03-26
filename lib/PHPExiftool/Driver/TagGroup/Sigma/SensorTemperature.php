<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorTemperature extends AbstractTagGroup
{
    protected string $id = 'Sigma:SensorTemperature';

    protected string $name = 'SensorTemperature';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sensor Temperature',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 237362
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:SensorTemperature',
            'desc' => [
                'en' => 'Sensor Temperature',
            ],
        ],
        1 => [
            /**
             * table_name : Sigma::Main
             * line : 237395
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:SensorTemperature',
            'desc' => [
                'en' => 'Sensor Temperature',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
