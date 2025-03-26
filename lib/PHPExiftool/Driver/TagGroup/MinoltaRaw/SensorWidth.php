<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorWidth extends AbstractTagGroup
{
    protected string $id = 'MinoltaRaw:SensorWidth';

    protected string $name = 'SensorWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sensor Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MinoltaRaw::PRD
             * line : 126881
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::PRD.MinoltaRaw:SensorWidth',
            'desc' => [
                'en' => 'Sensor Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
