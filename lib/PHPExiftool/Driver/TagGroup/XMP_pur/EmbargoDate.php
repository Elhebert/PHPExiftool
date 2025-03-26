<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_pur;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EmbargoDate extends AbstractTagGroup
{
    protected string $id = 'XMP-pur:EmbargoDate';

    protected string $name = 'EmbargoDate';

    protected ?string $phpType = 'date';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::pur
             * line : 411300
             * type : date
             * writable : true
             * count :
             * flags : avoid,bag,list
             */
            'id' => 'XMP::pur.XMP-pur:EmbargoDate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2369;
}
