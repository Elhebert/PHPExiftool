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
class AllColorFlatField3 extends AbstractTagGroup
{
    protected string $id = 'PhaseOne:AllColorFlatField3';

    protected string $name = 'AllColorFlatField3';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhaseOne::SensorCalibration
             * line : 303650
             * type : undef
             * writable : false
             * count :
             * flags : binary,permanent,unknown
             */
            'id' => 'PhaseOne::SensorCalibration.PhaseOne:AllColorFlatField3',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 38;
}
