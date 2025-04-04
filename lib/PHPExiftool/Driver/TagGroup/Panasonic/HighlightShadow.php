<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HighlightShadow extends AbstractTagGroup
{
    protected string $id = 'Panasonic:HighlightShadow';

    protected string $name = 'HighlightShadow';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Highlight Shadow',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 193309
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:HighlightShadow',
            'desc' => [
                'en' => 'Highlight Shadow',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
