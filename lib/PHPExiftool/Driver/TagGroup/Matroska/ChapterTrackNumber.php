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
class ChapterTrackNumber extends AbstractTagGroup
{
    protected string $id = 'Matroska:ChapterTrackNumber';

    protected string $name = 'ChapterTrackNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Chapter Track Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119212
             * type : unsigned
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Matroska::Main.Matroska:ChapterTrackNumber',
            'desc' => [
                'en' => 'Chapter Track Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
