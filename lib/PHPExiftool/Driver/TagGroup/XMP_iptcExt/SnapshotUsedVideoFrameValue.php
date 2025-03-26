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
class SnapshotUsedVideoFrameValue extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:SnapshotUsedVideoFrameValue';

    protected string $name = 'SnapshotUsedVideoFrameValue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Snapshot Used Video Frame Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289560
             * type : integer
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:SnapshotUsedVideoFrameValue',
            'desc' => [
                'en' => 'Snapshot Used Video Frame Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
