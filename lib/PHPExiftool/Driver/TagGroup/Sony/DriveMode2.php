<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DriveMode2 extends AbstractTagGroup
{
    protected string $id = 'Sony:DriveMode2';

    protected string $name = 'DriveMode2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Drive Mode 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246359
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:DriveMode2',
            'desc' => [
                'en' => 'Drive Mode 2',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246385
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:DriveMode2',
            'desc' => [
                'en' => 'Drive Mode 2',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 250889
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:DriveMode2',
            'desc' => [
                'en' => 'Drive Mode 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
