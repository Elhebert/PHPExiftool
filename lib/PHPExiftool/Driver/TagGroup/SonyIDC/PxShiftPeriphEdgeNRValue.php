<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SonyIDC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PxShiftPeriphEdgeNRValue extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:PxShiftPeriphEdgeNRValue';

    protected string $name = 'PxShiftPeriphEdgeNRValue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Px Shift Periph Edge NR Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279439
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:PxShiftPeriphEdgeNRValue',
            'desc' => [
                'en' => 'Px Shift Periph Edge NR Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
