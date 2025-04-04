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
class FaceDetectFrameCrop extends AbstractTagGroup
{
    protected string $id = 'Olympus:FaceDetectFrameCrop';

    protected string $name = 'FaceDetectFrameCrop';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face Detect Frame Crop',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176366
             * type : int16s
             * writable : true
             * count : 12
             * flags : permanent
             */
            'id' => 'Olympus::ImageProcessing.Olympus:FaceDetectFrameCrop',
            'desc' => [
                'en' => 'Face Detect Frame Crop',
            ],
        ],
    ];

    protected int $count = 12;

    protected int $flags = 2052;
}
