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
class WB_RBLevelsFluorescent extends AbstractTagGroup
{
    protected string $id = 'Nikon:WB_RBLevelsFluorescent';

    protected string $name = 'WB_RBLevelsFluorescent';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RB Levels Fluorescent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ColorBalanceA
             * line : 130131
             * type : int16u
             * writable : true
             * count : 6
             * flags : permanent,unsafe
             */
            'id' => 'Nikon::ColorBalanceA.Nikon:WB_RBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RB Levels Fluorescent',
            ],
        ],
    ];

    protected int $count = 6;

    protected int $flags = 2068;
}
