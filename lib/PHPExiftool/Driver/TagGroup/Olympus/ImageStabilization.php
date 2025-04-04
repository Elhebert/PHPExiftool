<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageStabilization extends AbstractTagGroup
{
    protected string $id = 'Olympus:ImageStabilization';

    protected string $name = 'ImageStabilization';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Stabilization',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 174311
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 176097
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::FocusInfo.Olympus:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
