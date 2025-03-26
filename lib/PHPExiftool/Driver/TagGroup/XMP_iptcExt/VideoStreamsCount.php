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
class VideoStreamsCount extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:VideoStreamsCount';

    protected string $name = 'VideoStreamsCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Video Streams Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289645
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:VideoStreamsCount',
            'desc' => [
                'en' => 'Video Streams Count',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
