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
class IncandConvChrmA_M extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:IncandConvChrmA_M';

    protected string $name = 'IncandConvChrmA_M';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Incand Conv Chrm A M',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213920
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:IncandConvChrmA_M',
            'desc' => [
                'en' => 'Incand Conv Chrm A M',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
