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
class SnapshotHeightPixels extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:SnapshotHeightPixels';

    protected string $name = 'SnapshotHeightPixels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Snapshot Height Pixels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289507
             * type : integer
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:SnapshotHeightPixels',
            'desc' => [
                'en' => 'Snapshot Height Pixels',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
