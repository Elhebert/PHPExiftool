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
class AFPointPosition extends AbstractTagGroup
{
    protected string $id = 'Casio:AFPointPosition';

    protected string $name = 'AFPointPosition';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Type2
             * line : 85927
             * type : int16u
             * writable : false
             * count : 4
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:AFPointPosition',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 4;
}
