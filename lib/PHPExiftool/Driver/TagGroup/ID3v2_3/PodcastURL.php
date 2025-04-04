<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v2_3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PodcastURL extends AbstractTagGroup
{
    protected string $id = 'ID3v2_3:PodcastURL';

    protected string $name = 'PodcastURL';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Podcast URL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ID3::v2_3
             * line : 103412
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ID3::v2_3.ID3v2_3:PodcastURL',
            'desc' => [
                'en' => 'Podcast URL',
            ],
        ],
    ];

    protected int $count = 0;
}
