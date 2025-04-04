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
class Saturation extends AbstractTagGroup
{
    protected string $id = 'Casio:Saturation';

    protected string $name = 'Saturation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61803
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 62097
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        2 => [
            /**
             * table_name : Casio::Type2
             * line : 64766
             * type : undef
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
