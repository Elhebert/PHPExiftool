<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GIPC_CPLD extends AbstractTagGroup
{
    protected string $id = 'FLIR:GIPC_CPLD';

    protected string $name = 'GIPC_CPLD';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GIPC CPLD',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::Parts
             * line : 86430
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Parts.FLIR:GIPC_CPLD',
            'desc' => [
                'en' => 'GIPC CPLD',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
