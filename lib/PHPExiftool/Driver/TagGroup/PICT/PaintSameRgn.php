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
class PaintSameRgn extends AbstractTagGroup
{
    protected string $id = 'PICT:PaintSameRgn';

    protected string $name = 'PaintSameRgn';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Paint Same Rgn',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183194
             * type : null
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:PaintSameRgn',
            'desc' => [
                'en' => 'Paint Same Rgn',
            ],
        ],
    ];

    protected int $count = 0;
}
