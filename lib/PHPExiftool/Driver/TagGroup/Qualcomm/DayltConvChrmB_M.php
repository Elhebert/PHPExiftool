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
class DayltConvChrmB_M extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:DayltConvChrmB_M';

    protected string $name = 'DayltConvChrmB_M';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Daylt Conv Chrm B M',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213782
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:DayltConvChrmB_M',
            'desc' => [
                'en' => 'Daylt Conv Chrm B M',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
