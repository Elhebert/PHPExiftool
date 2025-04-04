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
class FlashType extends AbstractTagGroup
{
    protected string $id = 'Olympus:FlashType';

    protected string $name = 'FlashType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Equipment
             * line : 175789
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Equipment.Olympus:FlashType',
            'desc' => [
                'en' => 'Flash Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
