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
class ColorFilter extends AbstractTagGroup
{
    protected string $id = 'Casio:ColorFilter';

    protected string $name = 'ColorFilter';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Filter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61852
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:ColorFilter',
            'desc' => [
                'en' => 'Color Filter',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 64806
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:ColorFilter',
            'desc' => [
                'en' => 'Color Filter',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
