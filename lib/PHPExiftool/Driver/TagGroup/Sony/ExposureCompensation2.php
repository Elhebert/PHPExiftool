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
class ExposureCompensation2 extends AbstractTagGroup
{
    protected string $id = 'Sony:ExposureCompensation2';

    protected string $name = 'ExposureCompensation2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Compensation 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251469
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureCompensation2',
            'desc' => [
                'en' => 'Exposure Compensation 2',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251481
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureCompensation2',
            'desc' => [
                'en' => 'Exposure Compensation 2',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251524
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureCompensation2',
            'desc' => [
                'en' => 'Exposure Compensation 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
