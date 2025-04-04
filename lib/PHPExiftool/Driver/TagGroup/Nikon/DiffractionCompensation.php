<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DiffractionCompensation extends AbstractTagGroup
{
    protected string $id = 'Nikon:DiffractionCompensation';

    protected string $name = 'DiffractionCompensation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Diffraction Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 134782
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:DiffractionCompensation',
            'desc' => [
                'en' => 'Diffraction Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135791
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:DiffractionCompensation',
            'desc' => [
                'en' => 'Diffraction Compensation',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140129
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:DiffractionCompensation',
            'desc' => [
                'en' => 'Diffraction Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
