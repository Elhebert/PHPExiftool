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
class DataOnScreenRegionY extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:DataOnScreenRegionY';

    protected string $name = 'DataOnScreenRegionY';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Data On Screen Region Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289041
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:DataOnScreenRegionY',
            'desc' => [
                'en' => 'Data On Screen Region Y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
