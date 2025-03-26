<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Barcode extends AbstractTagGroup
{
    protected string $id = 'Sony:Barcode';

    protected string $name = 'Barcode';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::PIC
             * line : 361207
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PIC.Sony:Barcode',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::PIC
             * line : 361210
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PIC.Sony:Barcode',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::PIC
             * line : 361281
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PIC.Sony:Barcode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
