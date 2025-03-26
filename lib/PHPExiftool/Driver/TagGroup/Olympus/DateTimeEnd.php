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
class DateTimeEnd extends AbstractTagGroup
{
    protected string $id = 'Olympus:DateTimeEnd';

    protected string $name = 'DateTimeEnd';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::WAV
             * line : 262257
             * type : undef
             * writable : false
             * count : 12
             * flags : permanent
             */
            'id' => 'Olympus::WAV.Olympus:DateTimeEnd',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 12;

    protected int $flags = 4;
}
