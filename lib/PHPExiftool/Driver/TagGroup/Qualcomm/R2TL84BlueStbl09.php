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
class R2TL84BlueStbl09 extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:R2TL84BlueStbl09';

    protected string $name = 'R2TL84BlueStbl09';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'R2 TL84 Blue Stbl 09',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 215555
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:R2TL84BlueStbl09',
            'desc' => [
                'en' => 'R2 TL84 Blue Stbl 09',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
