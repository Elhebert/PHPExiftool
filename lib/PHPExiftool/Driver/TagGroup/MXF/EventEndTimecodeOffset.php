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
class EventEndTimecodeOffset extends AbstractTagGroup
{
    protected string $id = 'MXF:EventEndTimecodeOffset';

    protected string $name = 'EventEndTimecodeOffset';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Event End Timecode Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115055
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:EventEndTimecodeOffset',
            'desc' => [
                'en' => 'Event End Timecode Offset',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
