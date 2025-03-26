<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorHeight extends AbstractTagGroup
{
    protected string $id = 'PhaseOne:SensorHeight';

    protected string $name = 'SensorHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sensor Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhaseOne::Main
             * line : 210775
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'PhaseOne::Main.PhaseOne:SensorHeight',
            'desc' => [
                'en' => 'Sensor Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
