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
class SwitchToRegisteredAFPoint extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:SwitchToRegisteredAFPoint';

    protected string $name = 'SwitchToRegisteredAFPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Switch To Registered AF Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53721
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:SwitchToRegisteredAFPoint',
            'desc' => [
                'en' => 'Switch To Registered AF Point',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54602
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SwitchToRegisteredAFPoint',
            'desc' => [
                'en' => 'Switch To Registered AF Point',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54616
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SwitchToRegisteredAFPoint',
            'desc' => [
                'en' => 'Switch To Registered AF Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
