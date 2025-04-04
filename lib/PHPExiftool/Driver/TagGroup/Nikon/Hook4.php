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
class Hook4 extends AbstractTagGroup
{
    protected string $id = 'Nikon:Hook4';

    protected string $name = 'Hook4';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hook 4',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139649
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:Hook4',
            'desc' => [
                'en' => 'Hook 4',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141197
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:Hook4',
            'desc' => [
                'en' => 'Hook 4',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
