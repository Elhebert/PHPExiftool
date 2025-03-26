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
class RetouchInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:RetouchInfo';

    protected string $name = 'RetouchInfo';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287399
             * type : string
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::crs.XMP-crs:RetouchInfo',
            'desc' => [
                'en' => 'Retouch Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
