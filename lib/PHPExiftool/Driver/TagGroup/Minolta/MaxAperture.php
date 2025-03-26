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
class MaxAperture extends AbstractTagGroup
{
    protected string $id = 'Minolta:MaxAperture';

    protected string $name = 'MaxAperture';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Max Aperture',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 121985
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:MaxAperture',
            'desc' => [
                'en' => 'Max Aperture',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 126862
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:MaxAperture',
            'desc' => [
                'en' => 'Max Aperture',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
