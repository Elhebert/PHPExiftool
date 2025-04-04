<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Image;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitDepth extends AbstractTagGroup
{
    protected string $id = 'MIE-Image:BitDepth';

    protected string $name = 'BitDepth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Bit Depth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Image
             * line : 111509
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Image.MIE-Image:BitDepth',
            'desc' => [
                'en' => 'Bit Depth',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
