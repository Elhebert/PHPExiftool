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
class RawImageHeight extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:RawImageHeight';

    protected string $name = 'RawImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::RAFData
             * line : 131152
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::RAFData.FujiFilm:RawImageHeight',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : FujiFilm::RAFData
             * line : 131168
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::RAFData.FujiFilm:RawImageHeight',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : FujiFilm::RAFData
             * line : 131176
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::RAFData.FujiFilm:RawImageHeight',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
