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
class StreamReady extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:StreamReady';

    protected string $name = 'StreamReady';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Stream Ready',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289569
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:StreamReady',
            'desc' => [
                'en' => 'Stream Ready',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
