<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureCompensation extends AbstractTagGroup
{
    protected string $id = 'Sanyo:ExposureCompensation';

    protected string $name = 'ExposureCompensation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::MOV
             * line : 335811
             * type : int32s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sanyo::MOV.Sanyo:ExposureCompensation',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sanyo::MP4
             * line : 336030
             * type : rational64s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sanyo::MP4.Sanyo:ExposureCompensation',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
