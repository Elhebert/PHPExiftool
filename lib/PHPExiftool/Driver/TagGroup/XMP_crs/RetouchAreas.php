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
class RetouchAreas extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:RetouchAreas';

    protected string $name = 'RetouchAreas';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Areas',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287081
             * type : struct
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::crs.XMP-crs:RetouchAreas',
            'desc' => [
                'en' => 'Retouch Areas',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
