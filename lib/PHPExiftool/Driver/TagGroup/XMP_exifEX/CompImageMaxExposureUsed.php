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
class CompImageMaxExposureUsed extends AbstractTagGroup
{
    protected string $id = 'XMP-exifEX:CompImageMaxExposureUsed';

    protected string $name = 'CompImageMaxExposureUsed';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exifEX
             * line : 408521
             * type : rational
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::exifEX.XMP-exifEX:CompImageMaxExposureUsed',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
