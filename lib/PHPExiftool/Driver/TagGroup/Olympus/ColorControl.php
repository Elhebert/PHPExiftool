<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorControl extends AbstractTagGroup
{
    protected string $id = 'Olympus:ColorControl';

    protected string $name = 'ColorControl';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 259024
             * type : int16u
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:ColorControl',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 6;

    protected int $flags = 2052;
}
