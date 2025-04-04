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
class EraseRgn extends AbstractTagGroup
{
    protected string $id = 'PICT:EraseRgn';

    protected string $name = 'EraseRgn';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Erase Rgn',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183179
             * type : Rgn
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:EraseRgn',
            'desc' => [
                'en' => 'Erase Rgn',
            ],
        ],
    ];

    protected int $count = 0;
}
