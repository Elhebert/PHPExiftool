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
class ColorSpace extends AbstractTagGroup
{
    protected string $id = 'Sony:ColorSpace';

    protected string $name = 'ColorSpace';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Space',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243277
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 244323
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244599
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251059
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
