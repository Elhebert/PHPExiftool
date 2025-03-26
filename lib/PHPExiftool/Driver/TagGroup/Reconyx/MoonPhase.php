<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MoonPhase extends AbstractTagGroup
{
    protected string $id = 'Reconyx:MoonPhase';

    protected string $name = 'MoonPhase';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Moon Phase',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 232645
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:MoonPhase',
            'desc' => [
                'en' => 'Moon Phase',
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type2
             * line : 232780
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Reconyx::Type2.Reconyx:MoonPhase',
            'desc' => [
                'en' => 'Moon Phase',
            ],
        ],
        2 => [
            /**
             * table_name : Reconyx::Type3
             * line : 232900
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:MoonPhase',
            'desc' => [
                'en' => 'Moon Phase',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
