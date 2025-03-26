<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Qualcomm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlckLvlEvenCols extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:BlckLvlEvenCols';

    protected string $name = 'BlckLvlEvenCols';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Blck Lvl Even Cols',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213740
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:BlckLvlEvenCols',
            'desc' => [
                'en' => 'Blck Lvl Even Cols',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
