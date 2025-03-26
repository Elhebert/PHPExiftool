<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraOrientation extends AbstractTagGroup
{
    protected string $id = 'Pentax:CameraOrientation';

    protected string $name = 'CameraOrientation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::ShotInfo
             * line : 209973
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::ShotInfo.Pentax:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
