<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SupplyChainSourceIdentifier extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:SupplyChainSourceIdentifier';

    protected string $name = 'SupplyChainSourceIdentifier';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Supply Chain Source Identifier',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289589
             * type : string
             * writable : true
             * count :
             * flags : bag,flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:SupplyChainSourceIdentifier',
            'desc' => [
                'en' => 'Supply Chain Source Identifier',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
