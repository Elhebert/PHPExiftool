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
class CropBottom extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:CropBottom';

    protected string $name = 'CropBottom';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Crop Bottom',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285323
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:CropBottom',
            'desc' => [
                'en' => 'Crop Bottom',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
