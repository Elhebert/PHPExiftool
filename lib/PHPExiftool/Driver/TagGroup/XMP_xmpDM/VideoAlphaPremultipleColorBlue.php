<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoAlphaPremultipleColorBlue extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:VideoAlphaPremultipleColorBlue';

    protected string $name = 'VideoAlphaPremultipleColorBlue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Video Alpha Premultiple Color Blue',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291696
             * type : integer
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:VideoAlphaPremultipleColorBlue',
            'desc' => [
                'en' => 'Video Alpha Premultiple Color Blue',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
