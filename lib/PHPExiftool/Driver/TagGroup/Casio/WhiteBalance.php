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
class WhiteBalance extends AbstractTagGroup
{
    protected string $id = 'Casio:WhiteBalance';

    protected string $name = 'WhiteBalance';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61711
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 62071
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        2 => [
            /**
             * table_name : Casio::Type2
             * line : 62148
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
