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
class ColorTempFlash extends AbstractTagGroup
{
    protected string $id = 'Pentax:ColorTempFlash';

    protected string $name = 'ColorTempFlash';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 208983
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:ColorTempFlash',
            'desc' => [
                'en' => 'Color Temp Flash',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
