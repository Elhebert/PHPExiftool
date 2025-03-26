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
class Profile1AudioCodec extends AbstractTagGroup
{
    protected string $id = 'Torrent:Profile1AudioCodec';

    protected string $name = 'Profile1AudioCodec';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Profile 1 Audio Codec',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Torrent::Profiles
             * line : 279841
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Torrent::Profiles.Torrent:Profile1AudioCodec',
            'desc' => [
                'en' => 'Profile 1 Audio Codec',
            ],
        ],
    ];

    protected int $count = 0;
}
