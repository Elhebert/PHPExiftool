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
class ResampleParams extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:ResampleParams';

    protected string $name = 'ResampleParams';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Resample Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291421
             * type : struct
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:ResampleParams',
            'desc' => [
                'en' => 'Resample Params',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
