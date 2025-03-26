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
        'en' => 'Usable Shooting Modes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53952
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:UsableShootingModes',
            'desc' => [
                'en' => 'Usable Shooting Modes',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53955
             * type : int32s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:UsableShootingModes',
            'desc' => [
                'en' => 'Usable Shooting Modes',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
