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
class RangeMaskMapInfoLabMin extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:RangeMaskMapInfoLabMin';

    protected string $name = 'RangeMaskMapInfoLabMin';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Range Mask Map Info Lab Min',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284108
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:RangeMaskMapInfoLabMin',
            'desc' => [
                'en' => 'Range Mask Map Info Lab Min',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
