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
class EraseRect extends AbstractTagGroup
{
    protected string $id = 'PICT:EraseRect';

    protected string $name = 'EraseRect';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Erase Rect',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 182999
             * type : Rect
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:EraseRect',
            'desc' => [
                'en' => 'Erase Rect',
            ],
        ],
    ];

    protected int $count = 0;
}
