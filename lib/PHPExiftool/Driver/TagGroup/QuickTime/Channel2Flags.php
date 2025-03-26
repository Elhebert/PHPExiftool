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
class Channel2Flags extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Channel2Flags';

    protected string $name = 'Channel2Flags';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Channel 2 Flags',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ChannelLayout
             * line : 217165
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ChannelLayout.QuickTime:Channel2Flags',
            'desc' => [
                'en' => 'Channel 2 Flags',
            ],
        ],
    ];

    protected int $count = 0;
}
