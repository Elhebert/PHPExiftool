<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NITF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitDepth extends AbstractTagGroup
{
    protected string $id = 'NITF:BitDepth';

    protected string $name = 'BitDepth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bit Depth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::NITF
             * line : 105131
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::NITF.NITF:BitDepth',
            'desc' => [
                'en' => 'Bit Depth',
            ],
        ],
    ];

    protected int $count = 0;
}
