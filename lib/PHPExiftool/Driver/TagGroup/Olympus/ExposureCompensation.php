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
class ExposureCompensation extends AbstractTagGroup
{
    protected string $id = 'Olympus:ExposureCompensation';

    protected string $name = 'ExposureCompensation';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::MOV1
             * line : 177297
             * type : rational64s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::MOV1.Olympus:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::MOV2
             * line : 177319
             * type : rational64s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::MOV2.Olympus:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::MP4
             * line : 177370
             * type : rational64s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::MP4.Olympus:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        3 => [
            /**
             * table_name : Olympus::Main
             * line : 178561
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
