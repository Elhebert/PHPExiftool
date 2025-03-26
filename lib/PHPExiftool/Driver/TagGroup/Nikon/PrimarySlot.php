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
class PrimarySlot extends AbstractTagGroup
{
    protected string $id = 'Nikon:PrimarySlot';

    protected string $name = 'PrimarySlot';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Primary Slot',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139669
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:PrimarySlot',
            'desc' => [
                'en' => 'Primary Slot',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 141100
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:PrimarySlot',
            'desc' => [
                'en' => 'Primary Slot',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
