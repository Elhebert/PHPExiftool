<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AELiveViewLocalHistogram extends AbstractTagGroup
{
    protected string $id = 'DJI:AELiveViewLocalHistogram';

    protected string $name = 'AELiveViewLocalHistogram';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DJI::Info
             * line : 104458
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'DJI::Info.DJI:AELiveViewLocalHistogram',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
