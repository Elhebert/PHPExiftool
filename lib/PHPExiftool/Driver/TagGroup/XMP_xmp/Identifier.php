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
class Identifier extends AbstractTagGroup
{
    protected string $id = 'XMP-xmp:Identifier';

    protected string $name = 'Identifier';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Identifier',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmp
             * line : 290921
             * type : string
             * writable : true
             * count :
             * flags : avoid,bag,list
             */
            'id' => 'XMP::xmp.XMP-xmp:Identifier',
            'desc' => [
                'en' => 'Identifier',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2369;
}
