<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CircularGradientBasedCorrections extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:CircularGradientBasedCorrections';

    protected string $name = 'CircularGradientBasedCorrections';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 398265
             * type : struct
             * writable : true
             * count :
             * flags : avoid,list,seq
             */
            'id' => 'XMP::crd.XMP-crd:CircularGradientBasedCorrections',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2625;
}
