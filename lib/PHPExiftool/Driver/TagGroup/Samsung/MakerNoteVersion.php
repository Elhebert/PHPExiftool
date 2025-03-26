<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNoteVersion extends AbstractTagGroup
{
    protected string $id = 'Samsung:MakerNoteVersion';

    protected string $name = 'MakerNoteVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Main
             * line : 334027
             * type : undef
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Samsung::Main.Samsung:MakerNoteVersion',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Samsung::Type2
             * line : 335020
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Samsung::Type2.Samsung:MakerNoteVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 2052;
}
