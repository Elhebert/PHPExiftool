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
class AFStatusCenterHorizontal extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusCenterHorizontal';

    protected string $name = 'AFStatusCenterHorizontal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Center Horizontal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFStatus15
             * line : 240389
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus15.Sony:AFStatusCenterHorizontal',
            'desc' => [
                'en' => 'AF Status Center Horizontal',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFStatus19
             * line : 240657
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus19.Sony:AFStatusCenterHorizontal',
            'desc' => [
                'en' => 'AF Status Center Horizontal',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraInfo2
             * line : 242528
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo2.Sony:AFStatusCenterHorizontal',
            'desc' => [
                'en' => 'AF Status Center Horizontal',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242917
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFStatusCenterHorizontal',
            'desc' => [
                'en' => 'AF Status Center Horizontal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
