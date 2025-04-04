<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PaintRRect extends AbstractTagGroup
{
    protected string $id = 'PICT:PaintRRect';

    protected string $name = 'PaintRRect';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Paint R Rect',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183032
             * type : Rect
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:PaintRRect',
            'desc' => [
                'en' => 'Paint R Rect',
            ],
        ],
    ];

    protected int $count = 0;
}
