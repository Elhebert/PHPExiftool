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
class Make extends AbstractTagGroup
{
    protected string $id = 'UserData:Make';

    protected string $name = 'Make';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229566
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229742
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229928
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::UserData.UserData:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
