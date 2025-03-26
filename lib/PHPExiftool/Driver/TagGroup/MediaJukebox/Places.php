<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MediaJukebox;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Places extends AbstractTagGroup
{
    protected string $id = 'MediaJukebox:Places';

    protected string $name = 'Places';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::MediaJukebox
             * line : 152754
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::MediaJukebox.MediaJukebox:Places',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
