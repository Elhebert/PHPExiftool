<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Channel4Coordinates extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Channel4Coordinates';

    protected string $name = 'Channel4Coordinates';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Channel 4 Coordinates',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ChannelLayout
             * line : 217607
             * type : float
             * writable : false
             * count : 3
             * flags :
             */
            'id' => 'QuickTime::ChannelLayout.QuickTime:Channel4Coordinates',
            'desc' => [
                'en' => 'Channel 4 Coordinates',
            ],
        ],
    ];

    protected int $count = 3;
}
