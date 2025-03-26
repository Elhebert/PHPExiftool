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
class CompressionRatio extends AbstractTagGroup
{
    protected string $id = 'Olympus:CompressionRatio';

    protected string $name = 'CompressionRatio';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Compression Ratio',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178777
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:CompressionRatio',
            'desc' => [
                'en' => 'Compression Ratio',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
