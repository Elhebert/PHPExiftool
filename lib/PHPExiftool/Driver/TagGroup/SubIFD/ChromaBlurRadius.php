<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChromaBlurRadius extends AbstractTagGroup
{
    protected string $id = 'SubIFD:ChromaBlurRadius';

    protected string $name = 'ChromaBlurRadius';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Chroma Blur Radius',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84198
             * type : rational64u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:ChromaBlurRadius',
            'desc' => [
                'en' => 'Chroma Blur Radius',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
