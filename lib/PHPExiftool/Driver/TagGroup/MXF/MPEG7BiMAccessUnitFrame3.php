<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MPEG7BiMAccessUnitFrame3 extends AbstractTagGroup
{
    protected string $id = 'MXF:MPEG7BiMAccessUnitFrame3';

    protected string $name = 'MPEG7BiMAccessUnitFrame3';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MPEG7 Bi M Access Unit Frame 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117913
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:MPEG7BiMAccessUnitFrame3',
            'desc' => [
                'en' => 'MPEG7 Bi M Access Unit Frame 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
