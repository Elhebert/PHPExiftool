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
class ManufactureCode extends AbstractTagGroup
{
    protected string $id = 'Casio:ManufactureCode';

    protected string $name = 'ManufactureCode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::QVCI
             * line : 85232
             * type : string
             * writable : false
             * count : 9
             * flags : permanent
             */
            'id' => 'Casio::QVCI.Casio:ManufactureCode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 9;

    protected int $flags = 4;
}
