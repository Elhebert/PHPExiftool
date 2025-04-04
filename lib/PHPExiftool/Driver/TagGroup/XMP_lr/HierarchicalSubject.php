<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_lr;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HierarchicalSubject extends AbstractTagGroup
{
    protected string $id = 'XMP-lr:HierarchicalSubject';

    protected string $name = 'HierarchicalSubject';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hierarchical Subject',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Lightroom
             * line : 281409
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::Lightroom.XMP-lr:HierarchicalSubject',
            'desc' => [
                'en' => 'Hierarchical Subject',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
