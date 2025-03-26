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
class AccelYPR extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AccelYPR';

    protected string $name = 'AccelYPR';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Accel360Fly
             * line : 310357
             * type : float
             * writable : false
             * count : 3
             * flags :
             */
            'id' => 'QuickTime::Accel360Fly.QuickTime:AccelYPR',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;
}
