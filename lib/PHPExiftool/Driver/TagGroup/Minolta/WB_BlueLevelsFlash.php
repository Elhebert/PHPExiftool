<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_BlueLevelsFlash extends AbstractTagGroup
{
    protected string $id = 'Minolta:WB_BlueLevelsFlash';

    protected string $name = 'WB_BlueLevelsFlash';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB Blue Levels Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125850
             * type : int16u
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:WB_BlueLevelsFlash',
            'desc' => [
                'en' => 'WB Blue Levels Flash',
            ],
        ],
    ];

    protected int $count = 7;

    protected int $flags = 2052;
}
