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
class Hook5 extends AbstractTagGroup
{
    protected string $id = 'Nikon:Hook5';

    protected string $name = 'Hook5';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hook 5',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139955
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:Hook5',
            'desc' => [
                'en' => 'Hook 5',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141203
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:Hook5',
            'desc' => [
                'en' => 'Hook 5',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 141267
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:Hook5',
            'desc' => [
                'en' => 'Hook 5',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
