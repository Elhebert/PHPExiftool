<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorData extends AbstractTagGroup
{
    protected string $id = 'QuickTime:SensorData';

    protected string $name = 'SensorData';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sensor Data',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Main
             * line : 228861
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Main.QuickTime:SensorData',
            'desc' => [
                'en' => 'Sensor Data',
            ],
        ],
    ];

    protected int $count = 0;
}
