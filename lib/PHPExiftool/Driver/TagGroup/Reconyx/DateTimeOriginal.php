<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTimeOriginal extends AbstractTagGroup
{
    protected string $id = 'Reconyx:DateTimeOriginal';

    protected string $name = 'DateTimeOriginal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 330633
             * type : int16u
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:DateTimeOriginal',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type2
             * line : 330868
             * type : int8u
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Reconyx::Type2.Reconyx:DateTimeOriginal',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Reconyx::Type3
             * line : 331093
             * type : int16u
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:DateTimeOriginal',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 2052;
}
