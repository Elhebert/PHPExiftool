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
class WhitePoint extends AbstractTagGroup
{
    protected string $id = 'Pentax:WhitePoint';

    protected string $name = 'WhitePoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 209625
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:WhitePoint',
            'desc' => [
                'en' => 'White Point',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
