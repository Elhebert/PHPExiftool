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
class ColorCompensationFilterSet extends AbstractTagGroup
{
    protected string $id = 'Sony:ColorCompensationFilterSet';

    protected string $name = 'ColorCompensationFilterSet';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Compensation Filter Set',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243051
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:ColorCompensationFilterSet',
            'desc' => [
                'en' => 'Color Compensation Filter Set',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243787
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:ColorCompensationFilterSet',
            'desc' => [
                'en' => 'Color Compensation Filter Set',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244803
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:ColorCompensationFilterSet',
            'desc' => [
                'en' => 'Color Compensation Filter Set',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251263
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ColorCompensationFilterSet',
            'desc' => [
                'en' => 'Color Compensation Filter Set',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
