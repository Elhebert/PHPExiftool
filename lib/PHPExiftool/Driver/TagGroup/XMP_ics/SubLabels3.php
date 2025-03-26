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
class SubLabels3 extends AbstractTagGroup
{
    protected string $id = 'XMP-ics:SubLabels3';

    protected string $name = 'SubLabels3';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sub Labels 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::ics
             * line : 288788
             * type : struct
             * writable : true
             * count :
             * flags : bag,flattened,list
             */
            'id' => 'XMP::ics.XMP-ics:SubLabels3',
            'desc' => [
                'en' => 'Sub Labels 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
