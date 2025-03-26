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
class AmbientTemperature extends AbstractTagGroup
{
    protected string $id = 'DJI:AmbientTemperature';

    protected string $name = 'AmbientTemperature';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DJI::ThermalParams
             * line : 104581
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DJI::ThermalParams.DJI:AmbientTemperature',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
