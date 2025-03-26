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
class UsableMeteringModes extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:UsableMeteringModes';

    protected string $name = 'UsableMeteringModes';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Usable Metering Modes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53966
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:UsableMeteringModes',
            'desc' => [
                'en' => 'Usable Metering Modes',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53969
             * type : int32s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:UsableMeteringModes',
            'desc' => [
                'en' => 'Usable Metering Modes',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
