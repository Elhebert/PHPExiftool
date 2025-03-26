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
class KK extends AbstractTagGroup
{
    protected string $id = 'DJI:KK';

    protected string $name = 'KK';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DJI::ThermalParams
             * line : 104594
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DJI::ThermalParams.DJI:KK',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
