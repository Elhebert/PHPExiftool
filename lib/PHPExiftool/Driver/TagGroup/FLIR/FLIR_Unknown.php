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
class FLIR_Unknown extends AbstractTagGroup
{
    protected string $id = 'FLIR:FLIR_Unknown';

    protected string $name = 'FLIR_Unknown';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::UserData
             * line : 123756
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'FLIR::UserData.FLIR:FLIR_Unknown',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
