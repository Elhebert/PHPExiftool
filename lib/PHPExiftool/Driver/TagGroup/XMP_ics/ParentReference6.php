<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_ics;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ParentReference6 extends AbstractTagGroup
{
    protected string $id = 'XMP-ics:ParentReference6';

    protected string $name = 'ParentReference6';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Parent Reference 6',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::ics
             * line : 288818
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::ics.XMP-ics:ParentReference6',
            'desc' => [
                'en' => 'Parent Reference 6',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
