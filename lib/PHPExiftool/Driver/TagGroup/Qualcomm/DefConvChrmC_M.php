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
class DefConvChrmC_M extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:DefConvChrmC_M';

    protected string $name = 'DefConvChrmC_M';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Def Conv Chrm C M',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213830
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:DefConvChrmC_M',
            'desc' => [
                'en' => 'Def Conv Chrm C M',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
