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
class PaintOval extends AbstractTagGroup
{
    protected string $id = 'PICT:PaintOval';

    protected string $name = 'PaintOval';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Paint Oval',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183068
             * type : Rect
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:PaintOval',
            'desc' => [
                'en' => 'Paint Oval',
            ],
        ],
    ];

    protected int $count = 0;
}
