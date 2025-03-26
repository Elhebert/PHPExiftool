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
class ExposureCompensationMode extends AbstractTagGroup
{
    protected string $id = 'Minolta:ExposureCompensationMode';

    protected string $name = 'ExposureCompensationMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Compensation Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123602
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:ExposureCompensationMode',
            'desc' => [
                'en' => 'Exposure Compensation Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125678
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:ExposureCompensationMode',
            'desc' => [
                'en' => 'Exposure Compensation Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
