<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SRF_;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBGreenDaylight extends AbstractTagGroup
{
    protected string $id = 'SRF#:WBGreenDaylight';

    protected string $name = 'WBGreenDaylight';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'WB Green Daylight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::SRF2
             * line : 252014
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::SRF2.SRF#:WBGreenDaylight',
            'desc' => [
                'en' => 'WB Green Daylight',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
