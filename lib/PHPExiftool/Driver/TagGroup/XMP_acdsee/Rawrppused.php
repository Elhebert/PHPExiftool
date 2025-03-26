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
class Rawrppused extends AbstractTagGroup
{
    protected string $id = 'XMP-acdsee:Rawrppused';

    protected string $name = 'Rawrppused';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::acdsee
             * line : 397846
             * type : boolean
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::acdsee.XMP-acdsee:Rawrppused',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
