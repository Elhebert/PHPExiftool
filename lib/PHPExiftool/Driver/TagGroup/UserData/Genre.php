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
class Genre extends AbstractTagGroup
{
    protected string $id = 'UserData:Genre';

    protected string $name = 'Genre';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Genre',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229715
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Genre',
            'desc' => [
                'en' => 'Genre',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229898
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::UserData.UserData:Genre',
            'desc' => [
                'en' => 'Genre',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
