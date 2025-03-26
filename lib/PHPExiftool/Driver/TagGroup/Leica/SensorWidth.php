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
class SensorWidth extends AbstractTagGroup
{
    protected string $id = 'Leica:SensorWidth';

    protected string $name = 'SensorWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sensor Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Subdir
             * line : 194026
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Subdir.Leica:SensorWidth',
            'desc' => [
                'en' => 'Sensor Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
