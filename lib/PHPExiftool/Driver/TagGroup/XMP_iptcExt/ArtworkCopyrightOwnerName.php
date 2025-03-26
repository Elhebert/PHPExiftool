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
class ArtworkCopyrightOwnerName extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:ArtworkCopyrightOwnerName';

    protected string $name = 'ArtworkCopyrightOwnerName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Artwork Copyright Owner Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 288925
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:ArtworkCopyrightOwnerName',
            'desc' => [
                'en' => 'Artwork Copyright Owner Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
