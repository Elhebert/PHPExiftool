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
class RetouchAreaMaskFullY extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:RetouchAreaMaskFullY';

    protected string $name = 'RetouchAreaMaskFullY';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Full Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287171
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskFullY',
            'desc' => [
                'en' => 'Retouch Area Mask Full Y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
