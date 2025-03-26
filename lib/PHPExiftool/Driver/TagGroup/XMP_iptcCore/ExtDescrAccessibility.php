<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcCore;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExtDescrAccessibility extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcCore:ExtDescrAccessibility';

    protected string $name = 'ExtDescrAccessibility';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcCore
             * line : 409009
             * type : lang-alt
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::iptcCore.XMP-iptcCore:ExtDescrAccessibility',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
