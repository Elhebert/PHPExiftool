<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PageImage extends AbstractTagGroup
{
    protected string $id = 'XMP-xmp:PageImage';

    protected string $name = 'PageImage';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Page Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmp
             * line : 290948
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmp.XMP-xmp:PageImage',
            'desc' => [
                'en' => 'Page Image',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
