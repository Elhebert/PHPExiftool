<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HighISOMultiplierRed extends AbstractTagGroup
{
    protected string $id = 'IFD0:HighISOMultiplierRed';

    protected string $name = 'HighISOMultiplierRed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'High ISO Multiplier Red',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194601
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::Main.IFD0:HighISOMultiplierRed',
            'desc' => [
                'en' => 'High ISO Multiplier Red',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
