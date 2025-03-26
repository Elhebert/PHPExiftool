<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AlbumTitle extends AbstractTagGroup
{
    protected string $id = 'Microsoft:AlbumTitle';

    protected string $name = 'AlbumTitle';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Album Title',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120482
             * type : Unicode
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:AlbumTitle',
            'desc' => [
                'en' => 'Album Title',
            ],
        ],
        1 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120969
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:AlbumTitle',
            'desc' => [
                'en' => 'Album Title',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
