<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSSpeed extends AbstractTagGroup
{
    protected string $id = 'MIE-GPS:GPSSpeed';

    protected string $name = 'GPSSpeed';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::GPS
             * line : 163715
             * type : rational64s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::GPS.MIE-GPS:GPSSpeed',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
