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
class AWBMaxGGain extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AWBMaxGGain';

    protected string $name = 'AWBMaxGGain';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AWB Max G Gain',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213596
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AWBMaxGGain',
            'desc' => [
                'en' => 'AWB Max G Gain',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
