<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Yaw extends AbstractTagGroup
{
    protected string $id = 'UserData:Yaw';

    protected string $name = 'Yaw';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Yaw',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229646
             * type : rational64s
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Yaw',
            'desc' => [
                'en' => 'Yaw',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229895
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::UserData.UserData:Yaw',
            'desc' => [
                'en' => 'Yaw',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
