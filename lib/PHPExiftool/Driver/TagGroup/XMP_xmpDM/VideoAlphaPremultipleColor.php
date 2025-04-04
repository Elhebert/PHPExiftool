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
class VideoAlphaPremultipleColor extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:VideoAlphaPremultipleColor';

    protected string $name = 'VideoAlphaPremultipleColor';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Video Alpha Premultiple Color',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291684
             * type : struct
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:VideoAlphaPremultipleColor',
            'desc' => [
                'en' => 'Video Alpha Premultiple Color',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
