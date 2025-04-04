<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RangeMaskMapInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:RangeMaskMapInfo';

    protected string $name = 'RangeMaskMapInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Range Mask Map Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287051
             * type : struct
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:RangeMaskMapInfo',
            'desc' => [
                'en' => 'Range Mask Map Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
