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
class EpsonImageWidth extends AbstractTagGroup
{
    protected string $id = 'Olympus:EpsonImageWidth';

    protected string $name = 'EpsonImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Epson Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178331
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:EpsonImageWidth',
            'desc' => [
                'en' => 'Epson Image Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
