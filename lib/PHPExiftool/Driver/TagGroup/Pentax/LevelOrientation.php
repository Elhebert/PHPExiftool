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
class LevelOrientation extends AbstractTagGroup
{
    protected string $id = 'Pentax:LevelOrientation';

    protected string $name = 'LevelOrientation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Level Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::LevelInfo
             * line : 205858
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::LevelInfo.Pentax:LevelOrientation',
            'desc' => [
                'en' => 'Level Orientation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
