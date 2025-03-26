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
class ClosedCaptionSubtitlesFlag extends AbstractTagGroup
{
    protected string $id = 'MXF:ClosedCaptionSubtitlesFlag';

    protected string $name = 'ClosedCaptionSubtitlesFlag';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Closed Caption Subtitles Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115851
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ClosedCaptionSubtitlesFlag',
            'desc' => [
                'en' => 'Closed Caption Subtitles Flag',
            ],
        ],
    ];

    protected int $count = 0;
}
