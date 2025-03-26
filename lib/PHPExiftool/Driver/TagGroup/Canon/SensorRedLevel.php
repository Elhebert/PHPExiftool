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
class SensorRedLevel extends AbstractTagGroup
{
    protected string $id = 'Canon:SensorRedLevel';

    protected string $name = 'SensorRedLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sensor Red Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Processing
             * line : 52412
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:SensorRedLevel',
            'desc' => [
                'en' => 'Sensor Red Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
