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
class VideoAlphaPremultipleColorTint extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:VideoAlphaPremultipleColorTint';

    protected string $name = 'VideoAlphaPremultipleColorTint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Video Alpha Premultiple Color Tint',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291734
             * type : integer
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:VideoAlphaPremultipleColorTint',
            'desc' => [
                'en' => 'Video Alpha Premultiple Color Tint',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
