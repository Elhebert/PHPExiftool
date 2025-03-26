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
class ModelType extends AbstractTagGroup
{
    protected string $id = 'Casio:ModelType';

    protected string $name = 'ModelType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::QVCI
             * line : 85226
             * type : string
             * writable : false
             * count : 7
             * flags : permanent
             */
            'id' => 'Casio::QVCI.Casio:ModelType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 7;

    protected int $flags = 4;
}
