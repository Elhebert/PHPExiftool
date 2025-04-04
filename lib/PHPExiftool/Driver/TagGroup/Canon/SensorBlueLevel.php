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
class SensorBlueLevel extends AbstractTagGroup
{
    protected string $id = 'Canon:SensorBlueLevel';

    protected string $name = 'SensorBlueLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sensor Blue Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Processing
             * line : 52415
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:SensorBlueLevel',
            'desc' => [
                'en' => 'Sensor Blue Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
