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
class CompressedQuickTime extends AbstractTagGroup
{
    protected string $id = 'PICT:CompressedQuickTime';

    protected string $name = 'CompressedQuickTime';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Compressed Quick Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183287
             * type : CompressedQuickTime
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:CompressedQuickTime',
            'desc' => [
                'en' => 'Compressed Quick Time',
            ],
        ],
    ];

    protected int $count = 0;
}
