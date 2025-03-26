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
class SensorDefects extends AbstractTagGroup
{
    protected string $id = 'PhaseOne:SensorDefects';

    protected string $name = 'SensorDefects';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhaseOne::SensorCalibration
             * line : 303584
             * type : undef
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'PhaseOne::SensorCalibration.PhaseOne:SensorDefects',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
