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
class ChapterSegmentEditionUID extends AbstractTagGroup
{
    protected string $id = 'Matroska:ChapterSegmentEditionUID';

    protected string $name = 'ChapterSegmentEditionUID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Chapter Segment Edition UID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119770
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'Matroska::Main.Matroska:ChapterSegmentEditionUID',
            'desc' => [
                'en' => 'Chapter Segment Edition UID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
