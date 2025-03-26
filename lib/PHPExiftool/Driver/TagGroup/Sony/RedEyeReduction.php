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
class RedEyeReduction extends AbstractTagGroup
{
    protected string $id = 'Sony:RedEyeReduction';

    protected string $name = 'RedEyeReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Red Eye Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243702
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:RedEyeReduction',
            'desc' => [
                'en' => 'Red Eye Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244902
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:RedEyeReduction',
            'desc' => [
                'en' => 'Red Eye Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
