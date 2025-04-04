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
class PaintSameArc extends AbstractTagGroup
{
    protected string $id = 'PICT:PaintSameArc';

    protected string $name = 'PaintSameArc';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Paint Same Arc',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183122
             * type : Point
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:PaintSameArc',
            'desc' => [
                'en' => 'Paint Same Arc',
            ],
        ],
    ];

    protected int $count = 0;
}
