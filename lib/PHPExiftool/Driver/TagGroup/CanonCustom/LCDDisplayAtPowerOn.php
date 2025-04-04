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
class LCDDisplayAtPowerOn extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:LCDDisplayAtPowerOn';

    protected string $name = 'LCDDisplayAtPowerOn';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'LCD Display At Power On',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55654
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:LCDDisplayAtPowerOn',
            'desc' => [
                'en' => 'LCD Display At Power On',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56484
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:LCDDisplayAtPowerOn',
            'desc' => [
                'en' => 'LCD Display At Power On',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
