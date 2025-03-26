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
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'Reconyx:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 330697
             * type : undef
             * writable : true
             * count : 30
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:SerialNumber',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type2
             * line : 331002
             * type : string
             * writable : true
             * count : 15
             * flags : permanent
             */
            'id' => 'Reconyx::Type2.Reconyx:SerialNumber',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Reconyx::Type3
             * line : 331330
             * type : unicode
             * writable : true
             * count : 15
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:SerialNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 2052;
}
