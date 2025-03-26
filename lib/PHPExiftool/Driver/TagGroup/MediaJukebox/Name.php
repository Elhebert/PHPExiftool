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
class Name extends AbstractTagGroup
{
    protected string $id = 'MediaJukebox:Name';

    protected string $name = 'Name';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::MediaJukebox
             * line : 152740
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::MediaJukebox.MediaJukebox:Name',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
