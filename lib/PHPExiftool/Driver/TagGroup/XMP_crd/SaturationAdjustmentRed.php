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
class SaturationAdjustmentRed extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:SaturationAdjustmentRed';

    protected string $name = 'SaturationAdjustmentRed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation Adjustment Red',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284474
             * type : integer
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:SaturationAdjustmentRed',
            'desc' => [
                'en' => 'Saturation Adjustment Red',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
