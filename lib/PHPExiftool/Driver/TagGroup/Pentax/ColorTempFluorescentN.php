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
class ColorTempFluorescentN extends AbstractTagGroup
{
    protected string $id = 'Pentax:ColorTempFluorescentN';

    protected string $name = 'ColorTempFluorescentN';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Fluorescent N',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 208977
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:ColorTempFluorescentN',
            'desc' => [
                'en' => 'Color Temp Fluorescent N',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
