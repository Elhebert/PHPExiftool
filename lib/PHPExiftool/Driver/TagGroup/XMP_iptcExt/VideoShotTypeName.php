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
class VideoShotTypeName extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:VideoShotTypeName';

    protected string $name = 'VideoShotTypeName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Video Shot Type Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289642
             * type : lang-alt
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:VideoShotTypeName',
            'desc' => [
                'en' => 'Video Shot Type Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
