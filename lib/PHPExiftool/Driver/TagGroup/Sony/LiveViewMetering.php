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
class LiveViewMetering extends AbstractTagGroup
{
    protected string $id = 'Sony:LiveViewMetering';

    protected string $name = 'LiveViewMetering';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Live View Metering',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245138
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:LiveViewMetering',
            'desc' => [
                'en' => 'Live View Metering',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245264
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:LiveViewMetering',
            'desc' => [
                'en' => 'Live View Metering',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
