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
class TimeScaleParamsFrameSize extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:TimeScaleParamsFrameSize';

    protected string $name = 'TimeScaleParamsFrameSize';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Time Scale Params Frame Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291564
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:TimeScaleParamsFrameSize',
            'desc' => [
                'en' => 'Time Scale Params Frame Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
