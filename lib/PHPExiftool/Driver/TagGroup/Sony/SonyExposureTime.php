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
class SonyExposureTime extends AbstractTagGroup
{
    protected string $id = 'Sony:SonyExposureTime';

    protected string $name = 'SonyExposureTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sony Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 265952
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:SonyExposureTime',
            'desc' => [
                'en' => 'Sony Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268136
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:SonyExposureTime',
            'desc' => [
                'en' => 'Sony Exposure Time',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270518
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:SonyExposureTime',
            'desc' => [
                'en' => 'Sony Exposure Time',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270601
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:SonyExposureTime',
            'desc' => [
                'en' => 'Sony Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
