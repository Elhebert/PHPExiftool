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
class CellR extends AbstractTagGroup
{
    protected string $id = 'XMP-cell:CellR';

    protected string $name = 'CellR';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Cell R',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::cell
             * line : 281806
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::cell.XMP-cell:CellR',
            'desc' => [
                'en' => 'Cell R',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
