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
class TrackLayer extends AbstractTagGroup
{
    protected string $id = 'Track#:TrackLayer';

    protected string $name = 'TrackLayer';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::TrackHeader
             * line : 325076
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::TrackHeader.Track#:TrackLayer',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
