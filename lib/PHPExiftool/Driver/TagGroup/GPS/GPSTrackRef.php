<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSTrackRef extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSTrackRef';

    protected string $name = 'GPSTrackRef';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Track Ref',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 90918
             * type : string
             * writable : true
             * count : 2
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSTrackRef',
            'desc' => [
                'en' => 'GPS Track Ref',
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 98287
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSTrackRef',
            'desc' => [
                'en' => 'GPS Track Ref',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2048;
}
