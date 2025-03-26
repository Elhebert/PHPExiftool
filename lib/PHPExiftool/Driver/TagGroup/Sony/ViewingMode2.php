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
class ViewingMode2 extends AbstractTagGroup
{
    protected string $id = 'Sony:ViewingMode2';

    protected string $name = 'ViewingMode2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Viewing Mode 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245152
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:ViewingMode2',
            'desc' => [
                'en' => 'Viewing Mode 2',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245278
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:ViewingMode2',
            'desc' => [
                'en' => 'Viewing Mode 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
