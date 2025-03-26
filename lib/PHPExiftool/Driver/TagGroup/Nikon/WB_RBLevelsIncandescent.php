<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RBLevelsIncandescent extends AbstractTagGroup
{
    protected string $id = 'Nikon:WB_RBLevelsIncandescent';

    protected string $name = 'WB_RBLevelsIncandescent';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ColorBalanceA
             * line : 191987
             * type : int16u
             * writable : true
             * count : 14
             * flags : permanent,unsafe
             */
            'id' => 'Nikon::ColorBalanceA.Nikon:WB_RBLevelsIncandescent',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 14;

    protected int $flags = 2068;
}
