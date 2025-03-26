<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioBitrate extends AbstractTagGroup
{
    protected string $id = 'MPEG:AudioBitrate';

    protected string $name = 'AudioBitrate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MPEG::Audio
             * line : 165696
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPEG::Audio.MPEG:AudioBitrate',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : MPEG::Audio
             * line : 165700
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPEG::Audio.MPEG:AudioBitrate',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : MPEG::Audio
             * line : 165704
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPEG::Audio.MPEG:AudioBitrate',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : MPEG::Audio
             * line : 165708
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPEG::Audio.MPEG:AudioBitrate',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : MPEG::Audio
             * line : 165712
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPEG::Audio.MPEG:AudioBitrate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
