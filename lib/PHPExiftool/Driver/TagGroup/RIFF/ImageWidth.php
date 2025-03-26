<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{
    protected string $id = 'RIFF:ImageWidth';

    protected string $name = 'ImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::AVIHeader
             * line : 326945
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::AVIHeader.RIFF:ImageWidth',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : RIFF::VP8
             * line : 328958
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::VP8.RIFF:ImageWidth',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : RIFF::VP8L
             * line : 329004
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::VP8L.RIFF:ImageWidth',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : RIFF::VP8X
             * line : 329044
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::VP8X.RIFF:ImageWidth',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
