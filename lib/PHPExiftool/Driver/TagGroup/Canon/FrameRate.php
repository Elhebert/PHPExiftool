<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameRate extends AbstractTagGroup
{
    protected string $id = 'Canon:FrameRate';

    protected string $name = 'FrameRate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Frame Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::MovieInfo
             * line : 50777
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::MovieInfo.Canon:FrameRate',
            'desc' => [
                'en' => 'Frame Rate',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::MovieInfo
             * line : 50786
             * type : rational32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::MovieInfo.Canon:FrameRate',
            'desc' => [
                'en' => 'Frame Rate',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
