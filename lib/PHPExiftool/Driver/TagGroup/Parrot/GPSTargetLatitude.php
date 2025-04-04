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
class GPSTargetLatitude extends AbstractTagGroup
{
    protected string $id = 'Parrot:GPSTargetLatitude';

    protected string $name = 'GPSTargetLatitude';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Target Latitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::FollowMe
             * line : 195856
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::FollowMe.Parrot:GPSTargetLatitude',
            'desc' => [
                'en' => 'GPS Target Latitude',
            ],
        ],
    ];

    protected int $count = 0;
}
