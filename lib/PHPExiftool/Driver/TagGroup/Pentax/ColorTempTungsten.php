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
class ColorTempTungsten extends AbstractTagGroup
{
    protected string $id = 'Pentax:ColorTempTungsten';

    protected string $name = 'ColorTempTungsten';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Tungsten',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 208971
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
