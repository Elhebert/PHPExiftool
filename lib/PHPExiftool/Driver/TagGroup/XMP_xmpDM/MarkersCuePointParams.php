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
class MarkersCuePointParams extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:MarkersCuePointParams';

    protected string $name = 'MarkersCuePointParams';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Markers Cue Point Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291291
             * type : struct
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:MarkersCuePointParams',
            'desc' => [
                'en' => 'Markers Cue Point Params',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
