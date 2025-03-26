<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageSourceData extends AbstractTagGroup
{
    protected string $id = 'IFD0:ImageSourceData';

    protected string $name = 'ImageSourceData';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Source Data',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83319
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Exif::Main.IFD0:ImageSourceData',
            'desc' => [
                'en' => 'Image Source Data',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2066;
}
