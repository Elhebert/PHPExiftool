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
class Edit8 extends AbstractTagGroup
{
    protected string $id = 'UserData:Edit8';

    protected string $name = 'Edit8';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Edit 8',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229877
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::UserData.UserData:Edit8',
            'desc' => [
                'en' => 'Edit 8',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
