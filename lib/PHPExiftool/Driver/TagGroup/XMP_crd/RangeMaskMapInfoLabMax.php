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
class RangeMaskMapInfoLabMax extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:RangeMaskMapInfoLabMax';

    protected string $name = 'RangeMaskMapInfoLabMax';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Range Mask Map Info Lab Max',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284105
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:RangeMaskMapInfoLabMax',
            'desc' => [
                'en' => 'Range Mask Map Info Lab Max',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
