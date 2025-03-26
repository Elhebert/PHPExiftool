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
class Classification extends AbstractTagGroup
{
    protected string $id = 'UserData:Classification';

    protected string $name = 'Classification';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Classification',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229688
             * type : undef
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Classification',
            'desc' => [
                'en' => 'Classification',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
