<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailCompressionTable extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ThumbnailCompressionTable';

    protected string $name = 'ThumbnailCompressionTable';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Thumbnail Compression Table',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106559
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ThumbnailCompressionTable',
            'desc' => [
                'en' => 'Thumbnail Compression Table',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
