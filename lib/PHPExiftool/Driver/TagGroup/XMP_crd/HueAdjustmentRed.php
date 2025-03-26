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
class HueAdjustmentRed extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:HueAdjustmentRed';

    protected string $name = 'HueAdjustmentRed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hue Adjustment Red',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 282981
             * type : integer
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:HueAdjustmentRed',
            'desc' => [
                'en' => 'Hue Adjustment Red',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
