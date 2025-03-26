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
class FlashSource extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashSource';

    protected string $name = 'FlashSource';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 192353
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashSource',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 192860
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashSource',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 193432
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashSource',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 194056
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashSource',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 194668
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashSource',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::FlashInfo0300
             * line : 195155
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0300.Nikon:FlashSource',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
