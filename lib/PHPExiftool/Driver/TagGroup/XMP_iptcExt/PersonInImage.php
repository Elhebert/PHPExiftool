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
class PersonInImage extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:PersonInImage';

    protected string $name = 'PersonInImage';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Person In Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289324
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:PersonInImage',
            'desc' => [
                'en' => 'Person In Image',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
