<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Vorbis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaximumBitrate extends AbstractTagGroup
{
    protected string $id = 'Vorbis:MaximumBitrate';

    protected string $name = 'MaximumBitrate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Maximum Bitrate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Vorbis::Identification
             * line : 280284
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Vorbis::Identification.Vorbis:MaximumBitrate',
            'desc' => [
                'en' => 'Maximum Bitrate',
            ],
        ],
    ];

    protected int $count = 0;
}
