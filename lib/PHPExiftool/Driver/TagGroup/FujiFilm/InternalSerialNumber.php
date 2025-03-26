<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InternalSerialNumber extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:InternalSerialNumber';

    protected string $name = 'InternalSerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Internal Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 89350
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:InternalSerialNumber',
            'desc' => [
                'en' => 'Internal Serial Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
