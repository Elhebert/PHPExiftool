<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OffsetMapVertical extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:OffsetMapVertical';

    protected string $name = 'OffsetMapVertical';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Offset Map Vertical',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106205
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent,unknown
             */
            'id' => 'Kodak::IFD.KodakIFD:OffsetMapVertical',
            'desc' => [
                'en' => 'Offset Map Vertical',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 38;
}
