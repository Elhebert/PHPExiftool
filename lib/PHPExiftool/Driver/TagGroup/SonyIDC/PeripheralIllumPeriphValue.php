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
class PeripheralIllumPeriphValue extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:PeripheralIllumPeriphValue';

    protected string $name = 'PeripheralIllumPeriphValue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Peripheral Illum Periph Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279345
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:PeripheralIllumPeriphValue',
            'desc' => [
                'en' => 'Peripheral Illum Periph Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
