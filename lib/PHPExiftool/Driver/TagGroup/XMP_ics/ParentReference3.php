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
class ParentReference3 extends AbstractTagGroup
{
    protected string $id = 'XMP-ics:ParentReference3';

    protected string $name = 'ParentReference3';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Parent Reference 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::ics
             * line : 288782
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::ics.XMP-ics:ParentReference3',
            'desc' => [
                'en' => 'Parent Reference 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
