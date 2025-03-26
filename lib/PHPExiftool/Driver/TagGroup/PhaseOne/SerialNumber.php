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
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'PhaseOne:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhaseOne::Main
             * line : 210760
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'PhaseOne::Main.PhaseOne:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : PhaseOne::SensorCalibration
             * line : 210916
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'PhaseOne::SensorCalibration.PhaseOne:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
