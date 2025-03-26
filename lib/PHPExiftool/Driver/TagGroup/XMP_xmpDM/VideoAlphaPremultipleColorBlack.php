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
class VideoAlphaPremultipleColorBlack extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:VideoAlphaPremultipleColorBlack';

    protected string $name = 'VideoAlphaPremultipleColorBlack';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Video Alpha Premultiple Color Black',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291693
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:VideoAlphaPremultipleColorBlack',
            'desc' => [
                'en' => 'Video Alpha Premultiple Color Black',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
