<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ComponentBitDepth extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:ComponentBitDepth';

    protected string $name = 'ComponentBitDepth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Component Bit Depth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::ImageInfo
             * line : 57217
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::ImageInfo.CanonRaw:ComponentBitDepth',
            'desc' => [
                'en' => 'Component Bit Depth',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
