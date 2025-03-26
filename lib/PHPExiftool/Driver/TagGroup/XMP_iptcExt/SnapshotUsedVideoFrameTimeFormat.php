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
class SnapshotUsedVideoFrameTimeFormat extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:SnapshotUsedVideoFrameTimeFormat';

    protected string $name = 'SnapshotUsedVideoFrameTimeFormat';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Snapshot Used Video Frame Time Format',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289522
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:SnapshotUsedVideoFrameTimeFormat',
            'desc' => [
                'en' => 'Snapshot Used Video Frame Time Format',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
