<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrimaryChromaticities extends AbstractTagGroup
{
    protected string $id = 'XMP-tiff:PrimaryChromaticities';

    protected string $name = 'PrimaryChromaticities';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Primary Chromaticities',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::tiff
             * line : 290808
             * type : rational
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::tiff.XMP-tiff:PrimaryChromaticities',
            'desc' => [
                'en' => 'Primary Chromaticities',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
