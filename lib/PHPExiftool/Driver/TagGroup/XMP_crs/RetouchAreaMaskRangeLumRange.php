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
class RetouchAreaMaskRangeLumRange extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:RetouchAreaMaskRangeLumRange';

    protected string $name = 'RetouchAreaMaskRangeLumRange';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Range Lum Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287144
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskRangeLumRange',
            'desc' => [
                'en' => 'Retouch Area Mask Range Lum Range',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
