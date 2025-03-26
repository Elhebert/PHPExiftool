<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDestLatitude extends AbstractTagGroup
{
    protected string $id = 'Parrot:GPSDestLatitude';

    protected string $name = 'GPSDestLatitude';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Dest Latitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::Automation
             * line : 195779
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::Automation.Parrot:GPSDestLatitude',
            'desc' => [
                'en' => 'GPS Dest Latitude',
            ],
        ],
    ];

    protected int $count = 0;
}
