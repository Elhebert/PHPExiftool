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
class Software extends AbstractTagGroup
{
    protected string $id = 'Casio:Software';

    protected string $name = 'Software';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Software',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::AVI
             * line : 61481
             * type : string
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Casio::AVI.Casio:Software',
            'desc' => [
                'en' => 'Software',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
