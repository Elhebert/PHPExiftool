<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CondadoTunOffsets extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:CondadoTunOffsets';

    protected string $name = 'CondadoTunOffsets';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Condado Tun Offsets',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108116
             * type : int16s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:CondadoTunOffsets',
            'desc' => [
                'en' => 'Condado Tun Offsets',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
