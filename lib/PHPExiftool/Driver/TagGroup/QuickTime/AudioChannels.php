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
class AudioChannels extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioChannels';

    protected string $name = 'AudioChannels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::AudioProf
             * line : 310412
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::AudioProf.QuickTime:AudioChannels',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::AudioSampleDesc
             * line : 310489
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::AudioSampleDesc.QuickTime:AudioChannels',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::ChannelLayout
             * line : 310809
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ChannelLayout.QuickTime:AudioChannels',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
