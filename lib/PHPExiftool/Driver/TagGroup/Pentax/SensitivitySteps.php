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
class SensitivitySteps extends AbstractTagGroup
{
    protected string $id = 'Pentax:SensitivitySteps';

    protected string $name = 'SensitivitySteps';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sensitivity Steps',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::CameraSettings
             * line : 197842
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::CameraSettings.Pentax:SensitivitySteps',
            'desc' => [
                'en' => 'Sensitivity Steps',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::CameraSettings
             * line : 197949
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::CameraSettings.Pentax:SensitivitySteps',
            'desc' => [
                'en' => 'Sensitivity Steps',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::EVStepInfo
             * line : 197997
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::EVStepInfo.Pentax:SensitivitySteps',
            'desc' => [
                'en' => 'Sensitivity Steps',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
