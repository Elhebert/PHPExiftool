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
class TeletextSubtitlesAvailable extends AbstractTagGroup
{
    protected string $id = 'MXF:TeletextSubtitlesAvailable';

    protected string $name = 'TeletextSubtitlesAvailable';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Teletext Subtitles Available',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115190
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TeletextSubtitlesAvailable',
            'desc' => [
                'en' => 'Teletext Subtitles Available',
            ],
        ],
    ];

    protected int $count = 0;
}
