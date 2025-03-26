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
class MaxBitrate extends AbstractTagGroup
{
    protected string $id = 'QuickTime:MaxBitrate';

    protected string $name = 'MaxBitrate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Bitrate
             * line : 310510
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Bitrate.QuickTime:MaxBitrate',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::HintHeader
             * line : 313718
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::HintHeader.QuickTime:MaxBitrate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
