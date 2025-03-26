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
class IncandConvChrmD_P extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:IncandConvChrmD_P';

    protected string $name = 'IncandConvChrmD_P';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Incand Conv Chrm D P',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213941
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:IncandConvChrmD_P',
            'desc' => [
                'en' => 'Incand Conv Chrm D P',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
