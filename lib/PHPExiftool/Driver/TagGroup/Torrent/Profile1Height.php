<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Torrent;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Profile1Height extends AbstractTagGroup
{
    protected string $id = 'Torrent:Profile1Height';

    protected string $name = 'Profile1Height';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Torrent::Profiles
             * line : 395087
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Torrent::Profiles.Torrent:Profile1Height',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
