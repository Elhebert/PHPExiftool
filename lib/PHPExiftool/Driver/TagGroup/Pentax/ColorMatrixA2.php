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
class ColorMatrixA2 extends AbstractTagGroup
{
    protected string $id = 'Pentax:ColorMatrixA2';

    protected string $name = 'ColorMatrixA2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 300811
             * type : undef
             * writable : true
             * count : 9
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:ColorMatrixA2',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 9;

    protected int $flags = 2052;
}
