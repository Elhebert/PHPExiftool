<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_GLevel6000K extends AbstractTagGroup
{
    protected string $id = 'Olympus:WB_GLevel6000K';

    protected string $name = 'WB_GLevel6000K';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB G Level 6000K',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176185
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::ImageProcessing.Olympus:WB_GLevel6000K',
            'desc' => [
                'en' => 'WB G Level 6000K',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
