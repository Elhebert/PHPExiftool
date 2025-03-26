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
class CMSharpness extends AbstractTagGroup
{
    protected string $id = 'Olympus:CMSharpness';

    protected string $name = 'CMSharpness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'CM Sharpness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::RawInfo
             * line : 180329
             * type : int16s
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Olympus::RawInfo.Olympus:CMSharpness',
            'desc' => [
                'en' => 'CM Sharpness',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
