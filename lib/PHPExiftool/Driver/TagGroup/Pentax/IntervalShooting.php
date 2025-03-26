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
class IntervalShooting extends AbstractTagGroup
{
    protected string $id = 'Pentax:IntervalShooting';

    protected string $name = 'IntervalShooting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Interval Shooting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 209584
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:IntervalShooting',
            'desc' => [
                'en' => 'Interval Shooting',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
