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
class FusionYPR extends AbstractTagGroup
{
    protected string $id = 'QuickTime:FusionYPR';

    protected string $name = 'FusionYPR';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fusion YPR',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Fusion360Fly
             * line : 218946
             * type : float
             * writable : false
             * count : 3
             * flags :
             */
            'id' => 'QuickTime::Fusion360Fly.QuickTime:FusionYPR',
            'desc' => [
                'en' => 'Fusion YPR',
            ],
        ],
    ];

    protected int $count = 3;
}
