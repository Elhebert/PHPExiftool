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
class Channel5Label extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Channel5Label';

    protected string $name = 'Channel5Label';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ChannelLayout
             * line : 311733
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ChannelLayout.QuickTime:Channel5Label',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
