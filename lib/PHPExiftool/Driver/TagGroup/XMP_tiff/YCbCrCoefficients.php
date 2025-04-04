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
class YCbCrCoefficients extends AbstractTagGroup
{
    protected string $id = 'XMP-tiff:YCbCrCoefficients';

    protected string $name = 'YCbCrCoefficients';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Y Cb Cr Coefficients',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::tiff
             * line : 290843
             * type : rational
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::tiff.XMP-tiff:YCbCrCoefficients',
            'desc' => [
                'en' => 'Y Cb Cr Coefficients',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
