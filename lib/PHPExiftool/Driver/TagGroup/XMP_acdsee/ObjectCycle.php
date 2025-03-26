<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_acdsee;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObjectCycle extends AbstractTagGroup
{
    protected string $id = 'XMP-acdsee:ObjectCycle';

    protected string $name = 'ObjectCycle';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Object Cycle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::acdsee
             * line : 281607
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::acdsee.XMP-acdsee:ObjectCycle',
            'desc' => [
                'en' => 'Object Cycle',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
