<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraTemperature extends AbstractTagGroup
{
    protected string $id = 'Leica:CameraTemperature';

    protected string $name = 'CameraTemperature';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Leica2
             * line : 274677
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica2.Leica:CameraTemperature',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::Subdir
             * line : 279440
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Subdir.Leica:CameraTemperature',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
