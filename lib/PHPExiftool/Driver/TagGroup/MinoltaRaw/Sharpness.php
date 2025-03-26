<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sharpness extends AbstractTagGroup
{
    protected string $id = 'MinoltaRaw:Sharpness';

    protected string $name = 'Sharpness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 186875
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:Sharpness',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
