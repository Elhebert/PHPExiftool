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
class KelvinWB_04 extends AbstractTagGroup
{
    protected string $id = 'Pentax:KelvinWB_04';

    protected string $name = 'KelvinWB_04';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Kelvin WB 04',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::KelvinWB
             * line : 200088
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::KelvinWB.Pentax:KelvinWB_04',
            'desc' => [
                'en' => 'Kelvin WB 04',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
