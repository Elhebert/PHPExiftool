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
class WB_RBLevelsCloudy extends AbstractTagGroup
{
    protected string $id = 'MinoltaRaw:WB_RBLevelsCloudy';

    protected string $name = 'WB_RBLevelsCloudy';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RB Levels Cloudy',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 127125
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:WB_RBLevelsCloudy',
            'desc' => [
                'en' => 'WB RB Levels Cloudy',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
