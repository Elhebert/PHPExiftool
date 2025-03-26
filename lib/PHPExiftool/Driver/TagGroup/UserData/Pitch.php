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
class Pitch extends AbstractTagGroup
{
    protected string $id = 'UserData:Pitch';

    protected string $name = 'Pitch';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Pitch',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229760
             * type : rational64s
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Pitch',
            'desc' => [
                'en' => 'Pitch',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229889
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::UserData.UserData:Pitch',
            'desc' => [
                'en' => 'Pitch',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
