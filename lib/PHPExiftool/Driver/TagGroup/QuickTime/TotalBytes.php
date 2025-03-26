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
class TotalBytes extends AbstractTagGroup
{
    protected string $id = 'QuickTime:TotalBytes';

    protected string $name = 'TotalBytes';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Total Bytes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::HintTrackInfo
             * line : 219537
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::HintTrackInfo.QuickTime:TotalBytes',
            'desc' => [
                'en' => 'Total Bytes',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::HintTrackInfo
             * line : 219549
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::HintTrackInfo.QuickTime:TotalBytes',
            'desc' => [
                'en' => 'Total Bytes',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::HintTrackInfo
             * line : 219552
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::HintTrackInfo.QuickTime:TotalBytes',
            'desc' => [
                'en' => 'Total Bytes',
            ],
        ],
    ];

    protected int $count = 0;
}
