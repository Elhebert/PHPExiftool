<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{
    protected string $id = 'Pentax:Model';

    protected string $name = 'Model';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Junk
             * line : 288305
             * type : string
             * writable : false
             * count : 32
             * flags : permanent
             */
            'id' => 'Pentax::Junk.Pentax:Model',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Junk2
             * line : 288345
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Pentax::Junk2.Pentax:Model',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::Main
             * line : 300893
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:Model',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 300962
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Pentax::PENT.Pentax:Model',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 2052;
}
