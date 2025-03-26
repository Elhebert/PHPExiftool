<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_cell;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MobileNetworkCode extends AbstractTagGroup
{
    protected string $id = 'XMP-cell:MobileNetworkCode';

    protected string $name = 'MobileNetworkCode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::cell
             * line : 398170
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::cell.XMP-cell:MobileNetworkCode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
