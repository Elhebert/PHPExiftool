<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exifEX;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompImageMinExposureUsed extends AbstractTagGroup
{
    protected string $id = 'XMP-exifEX:CompImageMinExposureUsed';

    protected string $name = 'CompImageMinExposureUsed';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Comp Image Min Exposure Used',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exifEX
             * line : 288589
             * type : rational
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::exifEX.XMP-exifEX:CompImageMinExposureUsed',
            'desc' => [
                'en' => 'Comp Image Min Exposure Used',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
