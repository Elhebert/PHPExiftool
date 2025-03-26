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
class MinoltaImageSize extends AbstractTagGroup
{
    protected string $id = 'Minolta:MinoltaImageSize';

    protected string $name = 'MinoltaImageSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Minolta Image Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 121816
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:MinoltaImageSize',
            'desc' => [
                'en' => 'Minolta Image Size',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122318
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:MinoltaImageSize',
            'desc' => [
                'en' => 'Minolta Image Size',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122626
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:MinoltaImageSize',
            'desc' => [
                'en' => 'Minolta Image Size',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::Main
             * line : 124567
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:MinoltaImageSize',
            'desc' => [
                'en' => 'Minolta Image Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
