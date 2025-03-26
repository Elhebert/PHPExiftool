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
        'en' => 'Sharpness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61757
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 62125
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
        2 => [
            /**
             * table_name : Casio::Type2
             * line : 64760
             * type : undef
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
