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
class ColorMatrix extends AbstractTagGroup
{
    protected string $id = 'Olympus:ColorMatrix';

    protected string $name = 'ColorMatrix';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Matrix',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176197
             * type : int16u
             * writable : true
             * count : 9
             * flags : permanent
             */
            'id' => 'Olympus::ImageProcessing.Olympus:ColorMatrix',
            'desc' => [
                'en' => 'Color Matrix',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178621
             * type : int16u
             * writable : true
             * count : 9
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:ColorMatrix',
            'desc' => [
                'en' => 'Color Matrix',
            ],
        ],
    ];

    protected int $count = 9;

    protected int $flags = 2052;
}
