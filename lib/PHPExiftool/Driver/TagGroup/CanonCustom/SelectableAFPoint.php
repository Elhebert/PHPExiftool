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
class SelectableAFPoint extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:SelectableAFPoint';

    protected string $name = 'SelectableAFPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Selectable AF Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54559
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SelectableAFPoint',
            'desc' => [
                'en' => 'Selectable AF Point',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54579
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SelectableAFPoint',
            'desc' => [
                'en' => 'Selectable AF Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
