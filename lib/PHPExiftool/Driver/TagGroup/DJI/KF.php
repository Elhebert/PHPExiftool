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
class KF extends AbstractTagGroup
{
    protected string $id = 'DJI:KF';

    protected string $name = 'KF';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DJI::ThermalParams
             * line : 104557
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DJI::ThermalParams.DJI:KF',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
