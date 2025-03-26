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
class RetouchAreaMaskMasksVersion extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:RetouchAreaMaskMasksVersion';

    protected string $name = 'RetouchAreaMaskMasksVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Masks Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287297
             * type : integer
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskMasksVersion',
            'desc' => [
                'en' => 'Retouch Area Mask Masks Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
