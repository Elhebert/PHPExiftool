<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Vorbis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReplayGainAlbumPeak extends AbstractTagGroup
{
    protected string $id = 'Vorbis:ReplayGainAlbumPeak';

    protected string $name = 'ReplayGainAlbumPeak';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Replay Gain Album Peak',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Vorbis::Comments
             * line : 280250
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Vorbis::Comments.Vorbis:ReplayGainAlbumPeak',
            'desc' => [
                'en' => 'Replay Gain Album Peak',
            ],
        ],
    ];

    protected int $count = 0;
}
