<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeScaleParamsFrameOverlappingPercentage extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:TimeScaleParamsFrameOverlappingPercentage';

    protected string $name = 'TimeScaleParamsFrameOverlappingPercentage';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Time Scale Params Frame Overlapping Percentage',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291561
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:TimeScaleParamsFrameOverlappingPercentage',
            'desc' => [
                'en' => 'Time Scale Params Frame Overlapping Percentage',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
