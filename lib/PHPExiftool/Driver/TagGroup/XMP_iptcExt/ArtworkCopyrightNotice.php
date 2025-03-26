<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ArtworkCopyrightNotice extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:ArtworkCopyrightNotice';

    protected string $name = 'ArtworkCopyrightNotice';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Artwork Copyright Notice',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 288913
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:ArtworkCopyrightNotice',
            'desc' => [
                'en' => 'Artwork Copyright Notice',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
