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
class K1 extends AbstractTagGroup
{
    protected string $id = 'DJI:K1';

    protected string $name = 'K1';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DJI::ThermalParams
             * line : 104545
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DJI::ThermalParams.DJI:K1',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
