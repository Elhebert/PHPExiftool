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
class ISO extends AbstractTagGroup
{
    protected string $id = 'Casio:ISO';

    protected string $name = 'ISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61826
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 62054
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        2 => [
            /**
             * table_name : Casio::Type2
             * line : 64769
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
