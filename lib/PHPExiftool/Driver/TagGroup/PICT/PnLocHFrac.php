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
class PnLocHFrac extends AbstractTagGroup
{
    protected string $id = 'PICT:PnLocHFrac';

    protected string $name = 'PnLocHFrac';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fractional Pen Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 182927
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:PnLocHFrac',
            'desc' => [
                'en' => 'Fractional Pen Position',
            ],
        ],
    ];

    protected int $count = 0;
}
