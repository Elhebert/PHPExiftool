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
class GradientBasedCorrections extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:GradientBasedCorrections';

    protected string $name = 'GradientBasedCorrections';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Gradient Based Corrections',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285423
             * type : struct
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::crs.XMP-crs:GradientBasedCorrections',
            'desc' => [
                'en' => 'Gradient Based Corrections',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
