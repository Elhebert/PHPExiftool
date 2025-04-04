<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashColorFilter extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashColorFilter';

    protected string $name = 'FlashColorFilter';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Color Filter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131271
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashColorFilter',
            'desc' => [
                'en' => 'Flash Color Filter',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131673
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashColorFilter',
            'desc' => [
                'en' => 'Flash Color Filter',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
