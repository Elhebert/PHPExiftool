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
class Lyrics extends AbstractTagGroup
{
    protected string $id = 'UserData:Lyrics';

    protected string $name = 'Lyrics';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lyrics',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229925
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::UserData.UserData:Lyrics',
            'desc' => [
                'en' => 'Lyrics',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
