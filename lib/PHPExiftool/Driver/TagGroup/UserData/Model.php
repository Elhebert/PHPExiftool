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
class Model extends AbstractTagGroup
{
    protected string $id = 'UserData:Model';

    protected string $name = 'Model';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Model Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229569
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Model',
            'desc' => [
                'en' => 'Model',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229590
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229694
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        3 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229748
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        4 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229934
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::UserData.UserData:Model',
            'desc' => [
                'en' => 'Model',
            ],
        ],
        5 => [
            /**
             * table_name : QuickTime::UserData
             * line : 229937
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::UserData.UserData:Model',
            'desc' => [
                'en' => 'Model',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
