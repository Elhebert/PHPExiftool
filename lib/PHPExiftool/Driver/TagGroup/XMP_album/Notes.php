<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_album;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Notes extends AbstractTagGroup
{
    protected string $id = 'XMP-album:Notes';

    protected string $name = 'Notes';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Notes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Album
             * line : 280656
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::Album.XMP-album:Notes',
            'desc' => [
                'en' => 'Notes',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
