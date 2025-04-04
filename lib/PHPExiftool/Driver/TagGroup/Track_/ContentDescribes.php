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
class ContentDescribes extends AbstractTagGroup
{
    protected string $id = 'Track#:ContentDescribes';

    protected string $name = 'ContentDescribes';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Content Describes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::TrackRef
             * line : 229547
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::TrackRef.Track#:ContentDescribes',
            'desc' => [
                'en' => 'Content Describes',
            ],
        ],
    ];

    protected int $count = 0;
}
