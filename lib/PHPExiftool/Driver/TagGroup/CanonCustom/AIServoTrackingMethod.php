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
class AIServoTrackingMethod extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AIServoTrackingMethod';

    protected string $name = 'AIServoTrackingMethod';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AI Servo Tracking Method',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54452
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AIServoTrackingMethod',
            'desc' => [
                'en' => 'AI Servo Tracking Method',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
