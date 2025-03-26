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
class UserRating extends AbstractTagGroup
{
    protected string $id = 'UserData:UserRating';

    protected string $name = 'UserRating';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'User Rating',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229796
             * type : undef
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:UserRating',
            'desc' => [
                'en' => 'User Rating',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
