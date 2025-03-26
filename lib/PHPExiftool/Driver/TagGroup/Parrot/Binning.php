<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Binning extends AbstractTagGroup
{
    protected string $id = 'Parrot:Binning';

    protected string $name = 'Binning';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V1
             * line : 282172
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V1.Parrot:Binning',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V2
             * line : 282355
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:Binning',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Parrot::V3
             * line : 282599
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:Binning',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
