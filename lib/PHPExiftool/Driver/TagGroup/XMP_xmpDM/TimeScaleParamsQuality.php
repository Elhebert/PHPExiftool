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
class TimeScaleParamsQuality extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:TimeScaleParamsQuality';

    protected string $name = 'TimeScaleParamsQuality';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Time Scale Params Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291567
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:TimeScaleParamsQuality',
            'desc' => [
                'en' => 'Time Scale Params Quality',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
