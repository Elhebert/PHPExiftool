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
class DateTimeOriginal extends AbstractTagGroup
{
    protected string $id = 'UserData:DateTimeOriginal';

    protected string $name = 'DateTimeOriginal';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Date/Time Original',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229709
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::UserData.UserData:DateTimeOriginal',
            'desc' => [
                'en' => 'Date/Time Original',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
