<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorTint extends AbstractTagGroup
{
    protected string $id = 'Leica:ColorTint';

    protected string $name = 'ColorTint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Tint',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Leica9
             * line : 191710
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica9.Leica:ColorTint',
            'desc' => [
                'en' => 'Color Tint',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
