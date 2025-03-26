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
class Hook1 extends AbstractTagGroup
{
    protected string $id = 'Nikon:Hook1';

    protected string $name = 'Hook1';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hook 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139314
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:Hook1',
            'desc' => [
                'en' => 'Hook 1',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140057
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:Hook1',
            'desc' => [
                'en' => 'Hook 1',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 141111
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:Hook1',
            'desc' => [
                'en' => 'Hook 1',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141170
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:Hook1',
            'desc' => [
                'en' => 'Hook 1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
