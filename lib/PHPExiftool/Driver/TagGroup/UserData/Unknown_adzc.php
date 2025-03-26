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
class Unknown_adzc extends AbstractTagGroup
{
    protected string $id = 'UserData:Unknown_adzc';

    protected string $name = 'Unknown_adzc';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 325331
             * type : string
             * writable : true
             * count :
             * flags : unknown
             */
            'id' => 'QuickTime::UserData.UserData:Unknown_adzc',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2080;
}
