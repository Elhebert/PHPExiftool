<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AutoLightingOptimizer extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:AutoLightingOptimizer';

    protected string $name = 'AutoLightingOptimizer';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto Lighting Optimizer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::DR4
             * line : 58783
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::DR4.CanonVRD:AutoLightingOptimizer',
            'desc' => [
                'en' => 'Auto Lighting Optimizer',
            ],
        ],
        1 => [
            /**
             * table_name : CanonVRD::Ver2
             * line : 61228
             * type : int16s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver2.CanonVRD:AutoLightingOptimizer',
            'desc' => [
                'en' => 'Auto Lighting Optimizer',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
