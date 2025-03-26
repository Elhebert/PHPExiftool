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
class PageInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-xmp:PageInfo';

    protected string $name = 'PageInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Page Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmp
             * line : 290939
             * type : struct
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::xmp.XMP-xmp:PageInfo',
            'desc' => [
                'en' => 'Page Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
