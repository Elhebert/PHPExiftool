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
class FocusPosition2 extends AbstractTagGroup
{
    protected string $id = 'Sony:FocusPosition2';

    protected string $name = 'FocusPosition2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Position 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251507
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FocusPosition2',
            'desc' => [
                'en' => 'Focus Position 2',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251527
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FocusPosition2',
            'desc' => [
                'en' => 'Focus Position 2',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251583
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FocusPosition2',
            'desc' => [
                'en' => 'Focus Position 2',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9402
             * line : 271331
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9402.Sony:FocusPosition2',
            'desc' => [
                'en' => 'Focus Position 2',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9404b
             * line : 271588
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9404b.Sony:FocusPosition2',
            'desc' => [
                'en' => 'Focus Position 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
