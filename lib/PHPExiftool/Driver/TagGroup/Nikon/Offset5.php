<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Offset5 extends AbstractTagGroup
{
    protected string $id = 'Nikon:Offset5';

    protected string $name = 'Offset5';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Offset 5',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141161
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:Offset5',
            'desc' => [
                'en' => 'Offset 5',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 141228
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:Offset5',
            'desc' => [
                'en' => 'Offset 5',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
