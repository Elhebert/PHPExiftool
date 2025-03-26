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
class AutoLightingOptimizerOn extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:AutoLightingOptimizerOn';

    protected string $name = 'AutoLightingOptimizerOn';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto Lighting Optimizer On',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::DR4
             * line : 58968
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::DR4.CanonVRD:AutoLightingOptimizerOn',
            'desc' => [
                'en' => 'Auto Lighting Optimizer On',
            ],
        ],
        1 => [
            /**
             * table_name : CanonVRD::Ver2
             * line : 61217
             * type : int16s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver2.CanonVRD:AutoLightingOptimizerOn',
            'desc' => [
                'en' => 'Auto Lighting Optimizer On',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
