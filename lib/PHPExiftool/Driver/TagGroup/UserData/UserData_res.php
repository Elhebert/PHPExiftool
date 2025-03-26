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
class UserData_res extends AbstractTagGroup
{
    protected string $id = 'UserData:UserData_res';

    protected string $name = 'UserData_res';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 326011
             * type : undef
             * writable : true
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::UserData.UserData:UserData_res',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2082;
}
