<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Track_;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TrackDuration extends AbstractTagGroup
{
    protected string $id = 'Track#:TrackDuration';

    protected string $name = 'TrackDuration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Track Duration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::TrackHeader
             * line : 229522
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::TrackHeader.Track#:TrackDuration',
            'desc' => [
                'en' => 'Track Duration',
            ],
        ],
    ];

    protected int $count = 0;
}
