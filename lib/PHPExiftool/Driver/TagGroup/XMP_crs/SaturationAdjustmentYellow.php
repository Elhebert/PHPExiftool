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
class SaturationAdjustmentYellow extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:SaturationAdjustmentYellow';

    protected string $name = 'SaturationAdjustmentYellow';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation Adjustment Yellow',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287426
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:SaturationAdjustmentYellow',
            'desc' => [
                'en' => 'Saturation Adjustment Yellow',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
