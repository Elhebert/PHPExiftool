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
class AFStatusTop_left extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusTop-left';

    protected string $name = 'AFStatusTop-left';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Top-left',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo2
             * line : 242495
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo2.Sony:AFStatusTop-left',
            'desc' => [
                'en' => 'AF Status Top-left',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242884
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFStatusTop-left',
            'desc' => [
                'en' => 'AF Status Top-left',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
