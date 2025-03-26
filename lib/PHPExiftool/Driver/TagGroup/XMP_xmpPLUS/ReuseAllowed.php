<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpPLUS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReuseAllowed extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpPLUS:ReuseAllowed';

    protected string $name = 'ReuseAllowed';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpPLUS
             * line : 414354
             * type : boolean
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::xmpPLUS.XMP-xmpPLUS:ReuseAllowed',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
