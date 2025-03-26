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
class ColorTemperatureBG extends AbstractTagGroup
{
    protected string $id = 'Olympus:ColorTemperatureBG';

    protected string $name = 'ColorTemperatureBG';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temperature BG',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178627
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Olympus::Main.Olympus:ColorTemperatureBG',
            'desc' => [
                'en' => 'Color Temperature BG',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
