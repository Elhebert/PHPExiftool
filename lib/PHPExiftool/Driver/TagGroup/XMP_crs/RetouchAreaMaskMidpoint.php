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
class RetouchAreaMaskMidpoint extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:RetouchAreaMaskMidpoint';

    protected string $name = 'RetouchAreaMaskMidpoint';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Midpoint',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287327
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskMidpoint',
            'desc' => [
                'en' => 'Retouch Area Mask Midpoint',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
