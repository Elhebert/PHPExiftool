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
class FacesDetected extends AbstractTagGroup
{
    protected string $id = 'Sony:FacesDetected';

    protected string $name = 'FacesDetected';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Faces Detected',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::FaceInfo
             * line : 246218
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FaceInfo.Sony:FacesDetected',
            'desc' => [
                'en' => 'Faces Detected',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::FaceInfoA
             * line : 246313
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FaceInfoA.Sony:FacesDetected',
            'desc' => [
                'en' => 'Faces Detected',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::ShotInfo
             * line : 252081
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ShotInfo.Sony:FacesDetected',
            'desc' => [
                'en' => 'Faces Detected',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag900b
             * line : 265862
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag900b.Sony:FacesDetected',
            'desc' => [
                'en' => 'Faces Detected',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
