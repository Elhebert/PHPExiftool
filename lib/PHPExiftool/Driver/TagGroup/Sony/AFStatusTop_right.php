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
class AFStatusTop_right extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusTop-right';

    protected string $name = 'AFStatusTop-right';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Top-right',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo2
             * line : 242429
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo2.Sony:AFStatusTop-right',
            'desc' => [
                'en' => 'AF Status Top-right',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242745
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFStatusTop-right',
            'desc' => [
                'en' => 'AF Status Top-right',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
