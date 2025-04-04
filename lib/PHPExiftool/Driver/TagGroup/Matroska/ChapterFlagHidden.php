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
class ChapterFlagHidden extends AbstractTagGroup
{
    protected string $id = 'Matroska:ChapterFlagHidden';

    protected string $name = 'ChapterFlagHidden';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Chapter Flag Hidden',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119227
             * type : unsigned
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Matroska::Main.Matroska:ChapterFlagHidden',
            'desc' => [
                'en' => 'Chapter Flag Hidden',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
