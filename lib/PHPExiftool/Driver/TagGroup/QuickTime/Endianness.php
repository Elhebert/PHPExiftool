<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Endianness extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Endianness';

    protected string $name = 'Endianness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ProtectionInfo
             * line : 324262
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ProtectionInfo.QuickTime:Endianness',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Wave
             * line : 326294
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Wave.QuickTime:Endianness',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
