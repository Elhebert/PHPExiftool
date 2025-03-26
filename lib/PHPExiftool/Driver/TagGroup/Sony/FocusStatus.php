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
class FocusStatus extends AbstractTagGroup
{
    protected string $id = 'Sony:FocusStatus';

    protected string $name = 'FocusStatus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Status',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242644
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:FocusStatus',
            'desc' => [
                'en' => 'Focus Status',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243623
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FocusStatus',
            'desc' => [
                'en' => 'Focus Status',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 244195
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:FocusStatus',
            'desc' => [
                'en' => 'Focus Status',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
