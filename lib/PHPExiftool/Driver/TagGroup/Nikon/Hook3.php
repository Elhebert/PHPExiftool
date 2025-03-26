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
class Hook3 extends AbstractTagGroup
{
    protected string $id = 'Nikon:Hook3';

    protected string $name = 'Hook3';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hook 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139365
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:Hook3',
            'desc' => [
                'en' => 'Hook 3',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140078
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:Hook3',
            'desc' => [
                'en' => 'Hook 3',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141185
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:Hook3',
            'desc' => [
                'en' => 'Hook 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
