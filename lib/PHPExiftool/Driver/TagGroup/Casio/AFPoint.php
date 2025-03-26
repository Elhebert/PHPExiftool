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
class AFPoint extends AbstractTagGroup
{
    protected string $id = 'Casio:AFPoint';

    protected string $name = 'AFPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61884
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
