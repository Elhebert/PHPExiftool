<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TeletextSubtitlesFlag extends AbstractTagGroup
{
    protected string $id = 'MXF:TeletextSubtitlesFlag';

    protected string $name = 'TeletextSubtitlesFlag';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Teletext Subtitles Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115845
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TeletextSubtitlesFlag',
            'desc' => [
                'en' => 'Teletext Subtitles Flag',
            ],
        ],
    ];

    protected int $count = 0;
}
