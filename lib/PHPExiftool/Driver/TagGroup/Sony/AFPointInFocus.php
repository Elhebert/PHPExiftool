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
class AFPointInFocus extends AbstractTagGroup
{
    protected string $id = 'Sony:AFPointInFocus';

    protected string $name = 'AFPointInFocus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point In Focus',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 238570
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPointInFocus',
            'desc' => [
                'en' => 'AF Point In Focus',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 238632
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPointInFocus',
            'desc' => [
                'en' => 'AF Point In Focus',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::AFInfo
             * line : 239423
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPointInFocus',
            'desc' => [
                'en' => 'AF Point In Focus',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
