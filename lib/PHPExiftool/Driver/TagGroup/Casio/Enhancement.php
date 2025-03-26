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
class Enhancement extends AbstractTagGroup
{
    protected string $id = 'Casio:Enhancement';

    protected string $name = 'Enhancement';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Enhancement',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61832
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:Enhancement',
            'desc' => [
                'en' => 'Enhancement',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 64786
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:Enhancement',
            'desc' => [
                'en' => 'Enhancement',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
