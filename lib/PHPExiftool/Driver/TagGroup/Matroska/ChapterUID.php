<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChapterUID extends AbstractTagGroup
{
    protected string $id = 'Matroska:ChapterUID';

    protected string $name = 'ChapterUID';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Chapter UID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119782
             * type : unsigned
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Matroska::Main.Matroska:ChapterUID',
            'desc' => [
                'en' => 'Chapter UID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
