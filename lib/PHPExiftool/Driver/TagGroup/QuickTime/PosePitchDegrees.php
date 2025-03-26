<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PosePitchDegrees extends AbstractTagGroup
{
    protected string $id = 'QuickTime:PosePitchDegrees';

    protected string $name = 'PosePitchDegrees';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::prhd
             * line : 326728
             * type : fixed32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::prhd.QuickTime:PosePitchDegrees',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
