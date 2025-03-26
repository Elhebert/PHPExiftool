<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v2_4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AlbumSortOrder extends AbstractTagGroup
{
    protected string $id = 'ID3v2_4:AlbumSortOrder';

    protected string $name = 'AlbumSortOrder';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ID3::v2_4
             * line : 149595
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ID3::v2_4.ID3v2_4:AlbumSortOrder',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : ID3::v2_4
             * line : 149679
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ID3::v2_4.ID3v2_4:AlbumSortOrder',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
