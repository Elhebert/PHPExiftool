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
class WeightedFlatSubject extends AbstractTagGroup
{
    protected string $id = 'XMP-lr:WeightedFlatSubject';

    protected string $name = 'WeightedFlatSubject';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Lightroom
             * line : 397387
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::Lightroom.XMP-lr:WeightedFlatSubject',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
