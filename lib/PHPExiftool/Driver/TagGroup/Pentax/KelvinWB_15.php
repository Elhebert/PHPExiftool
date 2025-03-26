<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class KelvinWB_15 extends AbstractTagGroup
{
    protected string $id = 'Pentax:KelvinWB_15';

    protected string $name = 'KelvinWB_15';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Kelvin WB 15',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::KelvinWB
             * line : 200121
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::KelvinWB.Pentax:KelvinWB_15',
            'desc' => [
                'en' => 'Kelvin WB 15',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
