<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RangeMaskMapInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:RangeMaskMapInfo';

    protected string $name = 'RangeMaskMapInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Range Mask Map Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284102
             * type : struct
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:RangeMaskMapInfo',
            'desc' => [
                'en' => 'Range Mask Map Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
