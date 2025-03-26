<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureCompensation extends AbstractTagGroup
{
    protected string $id = 'Samsung:ExposureCompensation';

    protected string $name = 'ExposureCompensation';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::MP4
             * line : 234138
             * type : rational64s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::MP4.Samsung:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : Samsung::Type2
             * line : 235436
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::Type2.Samsung:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
