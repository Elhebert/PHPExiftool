<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FacesDetected extends AbstractTagGroup
{
    protected string $id = 'Canon:FacesDetected';

    protected string $name = 'FacesDetected';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Faces Detected',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FaceDetect1
             * line : 48156
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FaceDetect1.Canon:FacesDetected',
            'desc' => [
                'en' => 'Faces Detected',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::FaceDetect2
             * line : 48196
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FaceDetect2.Canon:FacesDetected',
            'desc' => [
                'en' => 'Faces Detected',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::FaceDetect3
             * line : 48203
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FaceDetect3.Canon:FacesDetected',
            'desc' => [
                'en' => 'Faces Detected',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
