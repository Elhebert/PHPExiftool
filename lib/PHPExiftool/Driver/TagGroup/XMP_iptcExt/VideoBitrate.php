<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoBitrate extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:VideoBitrate';

    protected string $name = 'VideoBitrate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Video Bitrate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289616
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:VideoBitrate',
            'desc' => [
                'en' => 'Video Bitrate',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
