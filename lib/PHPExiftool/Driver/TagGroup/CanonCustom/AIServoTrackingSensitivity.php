<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AIServoTrackingSensitivity extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AIServoTrackingSensitivity';

    protected string $name = 'AIServoTrackingSensitivity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AI Servo Tracking Sensitivity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53758
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:AIServoTrackingSensitivity',
            'desc' => [
                'en' => 'AI Servo Tracking Sensitivity',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54415
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AIServoTrackingSensitivity',
            'desc' => [
                'en' => 'AI Servo Tracking Sensitivity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
