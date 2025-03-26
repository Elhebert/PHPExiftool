<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sharpness extends AbstractTagGroup
{
    protected string $id = 'Casio:Sharpness';

    protected string $name = 'Sharpness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 84605
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:Sharpness',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 85682
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:Sharpness',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Casio::Type2
             * line : 89481
             * type : undef
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:Sharpness',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
