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
class UsableShootingModes extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:UsableShootingModes';

    protected string $name = 'UsableShootingModes';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 72683
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:UsableShootingModes',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 72689
             * type : int32s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:UsableShootingModes',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
