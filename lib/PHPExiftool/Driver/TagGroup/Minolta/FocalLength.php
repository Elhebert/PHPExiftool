<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalLength extends AbstractTagGroup
{
    protected string $id = 'Minolta:FocalLength';

    protected string $name = 'FocalLength';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 121962
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::MOV1
             * line : 124261
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::MOV1.Minolta:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::MOV2
             * line : 124283
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::MOV2.Minolta:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
