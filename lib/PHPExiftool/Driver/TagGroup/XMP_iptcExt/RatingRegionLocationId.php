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
class RatingRegionLocationId extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:RatingRegionLocationId';

    protected string $name = 'RatingRegionLocationId';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rating Region Location Id',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289417
             * type : string
             * writable : true
             * count :
             * flags : bag,flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:RatingRegionLocationId',
            'desc' => [
                'en' => 'Rating Region Location Id',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
