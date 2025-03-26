<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_GRBLevelsAuto extends AbstractTagGroup
{
    protected string $id = 'FujiIFD:WB_GRBLevelsAuto';

    protected string $name = 'WB_GRBLevelsAuto';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'WB GRB Levels Auto',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::IFD
             * line : 89312
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FujiFilm::IFD.FujiIFD:WB_GRBLevelsAuto',
            'desc' => [
                'en' => 'WB GRB Levels Auto',
            ],
        ],
    ];

    protected int $count = 0;
}
