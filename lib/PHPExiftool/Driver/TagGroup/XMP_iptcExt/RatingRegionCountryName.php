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
class RatingRegionCountryName extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:RatingRegionCountryName';

    protected string $name = 'RatingRegionCountryName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rating Region Country Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289402
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:RatingRegionCountryName',
            'desc' => [
                'en' => 'Rating Region Country Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
