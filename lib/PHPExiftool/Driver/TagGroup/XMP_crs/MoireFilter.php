<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MoireFilter extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:MoireFilter';

    protected string $name = 'MoireFilter';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Moire Filter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286524
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:MoireFilter',
            'desc' => [
                'en' => 'Moire Filter',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
