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
class AudioAvgBitrate extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioAvgBitrate';

    protected string $name = 'AudioAvgBitrate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Avg Bitrate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::AudioProf
             * line : 216309
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::AudioProf.QuickTime:AudioAvgBitrate',
            'desc' => [
                'en' => 'Audio Avg Bitrate',
            ],
        ],
    ];

    protected int $count = 0;
}
