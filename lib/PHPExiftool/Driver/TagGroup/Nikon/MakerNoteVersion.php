<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNoteVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:MakerNoteVersion';

    protected string $name = 'MakerNoteVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVIVers
             * line : 191872
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AVIVers.Nikon:MakerNoteVersion',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::Main
             * line : 196583
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:MakerNoteVersion',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCDT
             * line : 202061
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCDT.Nikon:MakerNoteVersion',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::NCTG
             * line : 203123
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:MakerNoteVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
