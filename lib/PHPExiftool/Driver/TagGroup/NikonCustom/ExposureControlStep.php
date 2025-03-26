<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureControlStep extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ExposureControlStep';

    protected string $name = 'ExposureControlStep';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Control Step',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151046
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:ExposureControlStep',
            'desc' => [
                'en' => 'Exposure Control Step',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152704
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:ExposureControlStep',
            'desc' => [
                'en' => 'Exposure Control Step',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
